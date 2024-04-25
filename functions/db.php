<?php
session_start();
ob_start();
ini_set('display_errors', 1);

require_once "functions/fnGeneral.php";

function dbConnect()
{
	global $dbConn, $dbData;

	$dbServer   = 'localhost';
	$dbUser     = 'mydatatest_watsapp';
	$dbPassword = 'JAyL6Z244XqabrrVKXdj';
	$MyDataBase = 'mydatatest_watsapp';

	$dbConn = mysqli_connect($dbServer, $dbUser, $dbPassword);
	$dbConn->set_charset("utf8");
	if (!$dbConn) {
		echo "Server Bağlantı Hatası (" . mysqli_connect_errno() . ") " . mysqli_connect_error();
		exit;
	}
	$dbData = mysqli_select_db($dbConn, $MyDataBase);
	if (!$dbData) {
		echo "VeriTabanı Bağlantı Hatası " . mysqli_connect_error();
		exit;
	}
}

dbConnect();

function query($dbConn, $sql)
{
	$dizi = [];

	$result = mysqli_query($dbConn, $sql) or die("SorguHatası:" . mysqli_error($dbConn) . "<BR>$sql");

	if (is_bool($result)) return $result;

	while ($row = @mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$dizi[] = $row;
	}

	return $dizi;
}

function queryInsertId($dbConn, $sql)
{

	mysqli_query($dbConn, $sql) or die("HATA:" . mysqli_error($dbConn) . "<BR>$sql");

	return mysqli_insert_id($dbConn);
}


function queryInsertIdNoErr($dbConn, $sql)
{

	$returnResult = "";

	mysqli_query($dbConn, $sql);

	if (mysqli_error($dbConn) != "") $returnResult = "HATA:" . mysqli_error($dbConn);
	else $returnResult = mysqli_insert_id($dbConn);

	return $returnResult;
}

function convAscitoTr($text)
{
	$text = str_replace("Ä±", "ı", $text);
	$text = str_replace("Ä°", "İ", $text);
	$text = str_replace("Ä", "ğ", $text);
	$text = str_replace("Ä", "Ğ", $text);
	$text = str_replace("Ã¼", "ü", $text);
	$text = str_replace("Ã", "Ü", $text);
	$text = str_replace("Å", "ş", $text);
	$text = str_replace("Å", "Ş", $text);
	$text = str_replace("Ã¶", "ö", $text);
	$text = str_replace("Ã", "Ö", $text);
	$text = str_replace("Ã§", "ç", $text);
	$text = str_replace("Ã", "Ç", $text);
	$text = str_replace("â", "", $text);
	return $text;
}



function prepareSql($table, $dzField, $post)
{
	$nameField = $valField = $updateField = "";
	//echo "<pre>".print_r($dzField)."</pre>";

	for ($s = 0; $s < count($dzField); $s++) {

		$strField = $dzField[$s];
		$prsField = explode("=>", $strField);

		$field = $prsField[0];
		$type  = $prsField[1];
		$val   = $post[$field];

		if ($type == "PRIMARY" and $val == "") {
			continue;
		}

		$nameField .= ",$field ";
		$conFunc = "'";
		$clsFunc = "'";



		if ($type == "DATE") {
			$valField .= ",'" . dbDate($val) . "'";
			$updateField .= ",$field = '" . dbDate($val) . "'";
		}
		if ($type == "BOOL") {
			$valField .= ",'" . convChkVal($val) . "'";
			$updateField .= ",$field = '" . convChkVal($val) . "'";
		}
		if ($type == "PRIMARY") {
			$valField .= ",'$val'";
			$updateField .= ",$field = '$val' ";
		}
		if ($type == "") {
			$valField .= ",'$val'";
			$updateField .= ",$field = '$val'";
		}
	}

	$sql = "INSERT INTO $table(
		   " . substr($nameField, 1, 99999) . "
		  )VALUES(
		   " . substr($valField, 1, 99999) . "
		   )  ON DUPLICATE KEY UPDATE 
		   " . substr($updateField, 1, 9999);

	return $sql;
}


function escapeString($dbConn, $dizi)
{

	$Key = array_keys($dizi);
	for ($i = 0; $i < @count($Key); $i++) {
		$Key = $Key[$i];
		$Val = mysqli_real_escape_string($dbConn, $dizi[$Key]);
		if ($Val != $dizi[$Key]) {
			echo "$Key Parametresi Ozel Değişken İçeriyor.";
			exit;
		}
	}
}

extract($_REQUEST);

$jsonData = file_get_contents('php://input'); // data is sent from url not from form

if ($_SERVER['REQUEST_METHOD'] === 'POST' && file_get_contents('php://input') === 'php://input') {
	// handle data from url
} else {
	// escapeString($dbConn, $_POST);
	// escapeString($dbConn, $_GET);
}

function findBrowser()
{
	$data = $_SERVER['HTTP_USER_AGENT'];
	if (stristr($data, "MSIE")) {
		$browser = "Internet Explorer";
	} elseif (stristr($data, "Firefox")) {
		$browser = "Firefox";
	} elseif (stristr($data, "YaBrowser")) {
		$browser = "Yandex";
	} elseif (stristr($data, "Chrome")) {
		$browser = "Chrome";
	} elseif (stristr($data, "Safari")) {
		$browser = "Safari";
	} elseif (stristr($data, "Opera")) {
		$browser = "Opera";
	} else {
		$browser = "Unknown";
	}
	return $browser;
}

function FoundOS()
{
	$tespit = $_SERVER['HTTP_USER_AGENT'];
	if (stristr($tespit, "Windows")) {
		$os = "WINDOWS";
	} elseif (stristr($tespit, "Mac")) {
		$os = "IOS";
	} elseif (stristr($tespit, "Android")) {
		$os = "ANDROID";
	} elseif (stristr($tespit, "Linux")) {
		$os = "ANDROID";
	} else {
		$os = "ANDROID";
	}
	return $os;
}

function browserImg($standartExtension)
{
	$extension = ".webp";
	if (findBrowser() != "Chrome") {
		$extension = $standartExtension;
	}
	/*if(findBrowser() == "Safari" || findBrowser() == "Unknown"){
		$extension = $standartExtension;
	}*/
	return $extension;
}



/* STATICS */
$website     = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/';
$url         = $_SERVER['SERVER_NAME'] . "/" . $_SERVER['REQUEST_URI'];
$browser     = findBrowser();
$ip          = $_SERVER['REMOTE_ADDR'];
$programAdress = "https://istakip.mydata.com.tr";
