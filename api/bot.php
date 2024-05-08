<?php
header('Content-Type: application/json');

require_once "../functions/db.php";
include "../functions/class.log.php";

$request = file_get_contents('php://input') ?? $_REQUEST;

Log::info($request, "bot.log");

$request = json_decode($request);

if (!$request) {
    http_response_code(400);
    echo json_encode(["Invalid parameters"]);
    exit;
}

$actions = getActions();

$action = $request->action ?? "";
$pnr = $request->pnr ?? "";
$input = strval($request->input ?? "");
$ticketID = $request->ticketID ?? "";

if (!in_array($action, $actions)) {
    http_response_code(400);
    echo  json_encode(["message" => "İşlem geçersiz!"]);
    exit;
}

if (isActionCancelOrRefund($action) && !$pnr) {
    http_response_code(400);
    echo json_encode(["message" => "PNR boş olamaz"]);
    exit;
}


switch ($action) {
    case $actions["cancel"]:
        if ($ticketID) {
            $ticketID = strtoupper($ticketID);
            echo json_encode(["message" => "PNR $pnr: $ticketID numaralı biletiniz iptal edildi"]);
        } else {
            echo getPNR($pnr,"iptal");
        }
        break;

    case $actions["buy"]:
        echo json_encode(["message" => "Bilet satın alındı"]);
        break;

    case $actions["refund"]:
        if ($ticketID) {
            $ticketID = strtoupper($ticketID);
            echo json_encode(["message" => "PNR $pnr: $ticketID numaralı biletiniz iade edildi"]);
        } else {
            echo getPNR($pnr,"iade");
        }
        break;

    default:
        http_response_code(400);
        echo  json_encode(["message" => "İşlem geçersiz!"]);
        break;
}

function getPNR($pnr,$action)
{
    $data = [
        "name" => "Olvanot Jean claude",
        "surname" => "Rakotonirina",
        "date" => date("d.m.Y"),
        "billets" => ["1. bilet 1", "2. bilet 2", "3. bilet 3"]
    ];

    $pnrDetail = "PNR: " . $pnr . "\n";
    $pnrDetail .= "name: " . $data['name'] . "\n";
    $pnrDetail .= "surname: " . $data['surname'] . "\n";

    $pnrDetail .= "\nHangi bilet $action etmek istiyorsunuz? \n";

    $pnrDetail .= "---------------\n";
    $pnrDetail .= implode("\n", $data['billets']) . "\n";
    $pnrDetail .= "---------------\n\n";

    return json_encode(["message" => $pnrDetail]);
}

function getActions()
{
    return [
        "pnr" => "pnr",
        "cancel" => "cancel",
        "refund" => "refund",
        "buy" => "buy",
    ];
}

function isActionCancelOrRefund($action)
{
    $actions = getActions();

    return $action === $actions["cancel"] || $action === $actions["refund"];
}
