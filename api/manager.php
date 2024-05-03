<?php

header('Content-Type: application/json');

include "../functions/class.log.php";
include "../functions/db.php";

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit;
}

$startDate  = $ilkTarih ?? date("Y-m-d");
$endDate    = $sonTarih ?? date("Y-m-d");
$keyword    = $telefon ?? "";

$sql =  "
        SELECT * FROM verimor 
        WHERE DATE(created_at) 
        BETWEEN '$startDate' AND '$endDate' 
        AND phone LIKE '%$keyword%'
        ORDER BY id DESC
    ";

$rows = query($dbConn, $sql);

echo json_encode($rows);
exit;
