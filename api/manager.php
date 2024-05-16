<?php

header('Content-Type: application/json');

include "../functions/class.log.php";
include "../functions/db.php";

// if ($_SERVER['REQUEST_METHOD'] !== "POST") {
//     http_response_code(405);
//     echo json_encode(["error" => "Method not allowed"]);
//     exit;
// }


$startDate  = $ilkTarih ?? date("Y-m-d");
$endDate    = $sonTarih ?? date("Y-m-d");
$keyword    = $telefon ?? "";

if($returnData=="verimor"){
}

$sql =  "SELECT * FROM template";

$rows = query($dbConn, $sql);

exit;
// echo json_encode($rows);
