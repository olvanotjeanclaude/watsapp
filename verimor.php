<?php
header('Content-Type: application/json');

include "functions/class.log.php";


try {
    $requestData = json_encode(file_get_contents('php://input') ?? $_REQUEST ?? null);

    if (!$requestData)  throw new Exception("Invalid JSON data received.");

    // $requestData is like this "event_type=ringing&domain_id=6793&direction=inbound&caller_id_number=05418869037&outbound_caller_id_number=&destination_number=908505320060&dialed_user=05377903030&call_uuid=a2edf019-c0da-49df-8a2f-ec0efe2a3cae&start_stamp=&queue=";

    $requestData = json_decode($requestData, true);


    $requestData =  explode('&', $requestData);
} catch (\Throwable $th) {
    Log::error($th->getMessage());
}

