<?php
header('Content-Type: application/json');

include "app/Log.php";
include "functions/db.php";

try {
    $requestData = json_encode(file_get_contents('php://input'));
    // $requestData is like this "event_type=ringing&domain_id=6793&direction=inbound&caller_id_number=05418869037&outbound_caller_id_number=&destination_number=908505320060&dialed_user=05377903030&call_uuid=a2edf019-c0da-49df-8a2f-ec0efe2a3cae&start_stamp=&queue=";

    $requestData = json_decode($requestData, true);

    $requestData =  explode('&', $requestData);

    Log::info($requestData);

    if (count($requestData)) {
        $responses = array();

        foreach ($requestData as $pair) {
            list($key, $value) = explode('=', $pair);
            $responses[$key] = $value;
        }

        $phoneNumber =  $responses["caller_id_number"] ?? null;

        if ($phoneNumber) {
            $json =  json_encode($responses);

            storeVerimor($json, $phoneNumber);

            sendWatsupMessage($phoneNumber);

            Log::append($responses, "verimor.json");

            echo $json;
        } else {
            http_response_code(400);
            echo json_encode(["error" => "bad request"]);
        }
    }
} catch (\Throwable $th) {
    Log::error($th->getMessage());
}


function storeVerimor($json, $phone)
{
    $sql = "INSERT INTO verimor (value,phone) VALUES ('$json',$phone)";

    query($GLOBALS["dbConn"], $sql);
}


function sendWatsupMessage($number)
{
    $curl = curl_init();

    $row = query($GLOBALS["dbConn"], "SELECT * FROM template LIMIT 1");

    $dbMessage = $row[0]["text"] ?? "Deneme mesaj";

    $body = [
        "token" => "2o1nyvqtgp0w43z8",
        "to" => "+90$number",
        "body" => $dbMessage
    ];

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.ultramsg.com/instance84349/messages/chat",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => array(
            "content-type: application/json"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
}
