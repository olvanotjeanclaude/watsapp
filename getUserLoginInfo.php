<?php

header('Content-Type: application/json');

include("functions/db.php");
include "./functions/class.log.php";

escapeString($dbConn, $_REQUEST);

if (!$usercode && !$password) {
    echo json_encode(["error" => "Kullanıcı adı ve şifre boş bırakılmaz"]);
    exit;
}


$sql = "SELECT * FROM USERS WHERE USERCODE='$usercode' AND PASSWORD='$password' AND AKTIF='1' ";

$row = query($dbConn, $sql)[0] ?? null;


// Log::info([$usercode, $password]);

if ($row) {
    $_SESSION['usercode'] = $row["USERCODE"];
    $_SESSION['username'] =  $row["USERNAME"];
    $_SESSION["password"] = encrypt($row["PASSWORD"]);

    echo  json_encode(["success" => "Girişi başarılı!"]);
} else {
    echo  json_encode(["error" => "Kullanıcı Adı ve Şifrenizi Kontrol Ediniz"]);
}
