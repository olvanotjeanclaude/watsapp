<?php
header('Content-Type: application/json');

include "../functions/class.log.php";

try {
    $requestData = json_encode(file_get_contents('php://input'));

    $requestData = json_decode($requestData, true);

    Log::info($requestData,"api.log");
} catch (\Throwable $th) {
    Log::error($th->getMessage());
}
