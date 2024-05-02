<?php

if (!isset($_SESSION["usercode"])) {
  header("Location: login.php");
}

$transUser = $_SESSION["usercode"] ?? null;
$transPassword = decrypt($_SESSION["password"] ?? null);

if (!login($transUser, $transPassword)) {
  echo "Kullanıcı Adı ve Şifrenizi Kontrol Ediniz!<br>Giriş yapmak için yönlendiriliyorsunuz...";
  echo "<meta http-equiv='refresh' content='5;URL=$programAdress/login.php'>";
  exit;
}
