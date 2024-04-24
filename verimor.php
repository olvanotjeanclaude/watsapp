<?php

header('Content-Type: application/json');

try {
    $requestData = file_get_contents('php://input');
    // $requestData = "event_type=ringing&domain_id=6793&direction=inbound&caller_id_number=05418869037&outbound_caller_id_number=&destination_number=908505320060&dialed_user=05377903030&call_uuid=a2edf019-c0da-49df-8a2f-ec0efe2a3cae&start_stamp=&queue=";

    $requestData =  explode('&', $requestData);

    if (count($requestData)) {
        $responses = array();

        foreach ($requestData as $pair) {
            list($key, $value) = explode('=', $pair);
            $responses[$key] = $value;
        }

        if (isset($responses["caller_id_number"])) {
            $json =  json_encode($responses);
            file_put_contents("verimor.log", $json);
            echo $json;
        } else {
            http_response_code(400);
            echo json_encode(["error" => "bad request"]);
        }
    }
} catch (\Throwable $th) {
    //throw $th;
    echo $th->getMessage();
}
