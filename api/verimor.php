<?php
header('Content-Type: application/json');

include "../functions/class.log.php";
include "../functions/db.php";

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit;
}

try {
    $requestData = json_encode(file_get_contents('php://input') ?? $_REQUEST ?? null);

    if (!$requestData)  throw new Exception("Invalid JSON data received.");

    // $requestData is like this "event_type=ringing&domain_id=6793&direction=inbound&caller_id_number=05418869037&outbound_caller_id_number=&destination_number=908505320060&dialed_user=05377903030&call_uuid=a2edf019-c0da-49df-8a2f-ec0efe2a3cae&start_stamp=&queue=";

    $requestData = json_decode($requestData, true);

    Log::info($requestData);

    $requestData =  explode('&', $requestData);

    if (count($requestData)) {
        $responses = array();

        foreach ($requestData as $pair) {
            $pair = explode('=', $pair);
            $key = $pair[0] ?? null;
            $value = $pair[1] ?? null;

            if ($key && $value)   $responses[$key] = $value;
        }

        if (!isset($responses["caller_id_number"])) {
            http_response_code(400);
            echo json_encode(["error" => "Bad request"]);
            exit;
        }

        $phoneNumber = $responses["caller_id_number"];

        $json =  json_encode($responses);

        storeVerimor($json, $phoneNumber);

        sendWatsupMessage($phoneNumber);

        echo $json;
    }
} catch (\Throwable $th) {
    Log::error($th->getMessage());
}


function storeVerimor($json, $phone)
{
    $stmt = $GLOBALS["dbConn"]->prepare("INSERT INTO verimor (value, phone) VALUES (?, ?)");
    $stmt->bind_param("ss", $json, $phone);
    $stmt->execute();
}

function sendWatsupMessage($number)
{
    $instance = "instance84393";
    $token = "4g40t35vm47e74dh";

    if (countryCode() != "TR") {
        $number = "+" . $number;
    }

    $curl = curl_init();

    $body = [
        "token" => $token,
        "to" => $number,
        "body" => getMessageFromDatabase()
    ];

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.ultramsg.com/$instance/messages/chat",
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
    $error = curl_error($curl);

    curl_close($curl);

    if ($error)  throw new Exception("Failed to send WhatsApp message: $error");

    return $response;
}

function getMessageFromDatabase()
{
    $row = query($GLOBALS["dbConn"], "SELECT * FROM template LIMIT 1");
    return $row[0]["text"] ?? "Default message";
}
