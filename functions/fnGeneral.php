<?php

date_default_timezone_set('Europe/Istanbul');

function transsmallbig($pString)
{

  $pString = str_replace("ı", "I", $pString);
  $pString = str_replace("i", "İ", $pString);
  $pString = str_replace("ğ", "Ğ", $pString);
  $pString = str_replace("ö", "Ö", $pString);
  $pString = str_replace("ü", "Ü", $pString);
  $pString = str_replace("ç", "Ç", $pString);
  $pString = str_replace("ş", "Ş", $pString);
  //    echo $pString;
  $pString = strtoupper($pString);

  return $pString;
}

function goDate($date, $day, $direct)
{
  if ($direct == "-")  $gun = substr($date, 8, 2) - $day;
  if ($direct == "+")  $gun = substr($date, 8, 2) + $day;
  $month = substr($date, 5, 2);
  $year = substr($date, 0, 4);
  $newDate = date("Y-m-d", @mktime(0, 0, 0, $month, $gun, $year));
  return $newDate;
}

function dbDate($date)
{
  $date =  substr($date, 6, 4) . "-" . substr($date, 3, 2) . "-" . substr($date, 0, 2);
  if ($date == "" or $date == "--") $date = "0000-00-00";
  return $date . substr($date, 10, 8);
}

function userDate($date)
{
  $date =  substr($date, 8, 2) . "/" . substr($date, 5, 2) . "/" . substr($date, 0, 4);
  if ($date == "00/00/0000" or $date == "//") $date = "";
  return $date;
}

function userDateTime($date)
{
  $ndate =  substr($date, 8, 2) . "/" . substr($date, 5, 2) . "/" . substr($date, 0, 4);
  $ntime =  substr($date, 11, 5);
  if ($ndate == "00/00/0000" or $ndate == "//") {
    $ndate = "";
    $ntime = "";
  }
  return $ndate . " " . $ntime;
}

function userDateTimeSc($date)
{
  $ndate =  substr($date, 8, 2) . "/" . substr($date, 5, 2) . "/" . substr($date, 0, 4);
  $ntime =  substr($date, 11, 8);
  if ($ndate == "00/00/0000" or $ndate == "//") {
    $ndate = "";
    $ntime = "";
  }
  return $ndate . " " . $ntime;
}

function userTime($date)
{
  $ntime =  substr($date, 11, 5);
  return $ntime;
}

function timeDiff($minute)
{
  if (!is_numeric($minute)) return;

  $day = intval($minute / 1440);
  if ($day > 0) {
    return " " . $day;
  } else if ($day == 0) {
    $day *= (-1);
    return "<span style='color:blue'>$day</span>";
  } else {
    return "<span style='color:red'>$day</span>";
  }
}

function timeDiff2($minute)
{  //Excel çıktısı HTML olarak yazmaması için (yoksa hata alıyor)
  if (!is_numeric($minute)) return;
  $day = intval($minute / 1440);
  if ($day > 0) {
    return " " . $day;
  } else {
    $day *= (-1);
    return $day;
  }
}


function userDayNameNight($string)
{
  $dzDayName = array(
    'PAZAR' => 'Pazar',
    'PAZAR Aksami' => 'Pazar Akşamı',
    'PAZARI PAZARTESIYE BAGLAYAN GECE' => 'Pazarı Pazartesiye Bağlayan Gece',
    'PAZARTESI' => 'Pazartesi',
    'PAZARTESI Aksami' => 'Pazartesi Akşamı',
    'PAZARTESIYI SALIYA BAGLAYAN GECE' => 'Pazartesiyi Salıya Bağlayan Gece',
    'SALI' => 'Salı',
    'SALI Aksami' => 'Salı Akşamı',
    'SALIYI CARSAMBAYA BAGLAYAN GECE' => 'Salıyı Çarşambaya Bağlayan Gece',
    'CARSAMBA' => 'Çarşamba',
    'CARSAMBA Aksami' => 'Çarşamba Akşamı',
    'CARSAMBAYI PERSEMBEYE BAGLAYAN GECE' => 'Çarşambayı Perşembeye Bağlayan Gece',
    'PERSEMBE' => 'Perşembe',
    'PERSEMBE Aksami' => 'Perşembe Akşamı',
    'PERSEMBEYI CUMAYA BAGLAYAN GECE' => 'Perşembeyi Cumaya Bağlayan Gece',
    'CUMA' => 'Cuma',
    'CUMA Aksami' => 'Cuma Akşamı',
    'CUMAYI CUMARTESIYE BAGLAYAN GECE' => 'Cumayı Cumartesiye Bağlayan Gece',
    'CUMARTESI' => 'Cumartesi',
    'CUMARTESI Aksami' => 'Cumartesi Akşamı',
    'CUMARTESIYI PAZARA BAGLAYAN GECE' => 'Cumartesiyi Pazara Bağlayan Gece',
  );
  foreach ($dzDayName as $key => $value) {
    if ($string == $key) {
      $dayNameNight = $value;
    }
    //echo $key."-".$value."<br>";
  }
  return $dayNameNight;
}

function yazPre($string)
{

  if (is_array($string)) {
    echo "<pre>";
    print_r($string);
    echo "</pre>";
  } else {
    echo "<pre>$string</pre>";
  }
}

function dd(...$args)
{
  echo '<pre>';
  foreach ($args as $arg) {
    var_dump($arg);
  }
  echo '</pre>';
  die();
}

function genderName($cins)
{

  $dzCinsler = array("E" => "Erkek", "Z" => "Erkek", "M" => "Erkek", "C" => "Erkek", "B" => "Bayan", "Y" => "Bayan", "W" => "Bayan", "D" => "Bayan");
  $dzCinsImg = array("E" => "erkek.gif", "Z" => "erkekk.gif", "ZS" => "erkekks.gif", "M" => "erkekr.gif", "C" => "erkekx.gif", "B" => "bayan.gif", "Y" => "bayank.gif", "YS" => "bayanks.gif", "W" => "bayanr.gif", "D" => "bayanx.gif", "" => "");
  $dzCinsRenk = array("E" => "#ffffff", "Z" => "#ffffff", "ZS" => "#ffffff", "M" => "#ffffff", "C" => "#ffffff", "B" => "#ffffff", "Y" => "#ffffff", "YS" => "#ffffff", "W" => "#ffffff", "D" => "#ffffff", "" => "white");

  return array($dzCinsler[$cins], $dzCinsImg[$cins], $dzCinsRenk[$cins]);
}


function shortMonthName($ay)
{

  $dzKisaAylar = array("01" => "Oca", "02" => "Şub", "03" => "Mar", "04" => "Nis", "05" => "May", "06" => "Haz", "07" => "Tem", "08" => "Ağu", "09" => "Eyl", "10" => "Eki", "11" => "Kas", "12" => "Ara");
  return $dzKisaAylar[$ay];
}

function barDateDay($date)
{

  $parse = explode("/", $date);
  $dateTo = strtotime($parse[2] . "-" . $parse[0] . "-" . $parse[1] . " 00:00:00");

  $ingDay = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
  $trDay = array("Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi", "Pazar");

  $goDay = str_replace($ingDay, $trDay, date("D", strtotime($date)));

  $dayMonthYear = $parse[1] . "/" . $parse[0] . "/" . $parse[2];

  return "<div class='dateDay text-center'><b>$goDay</b></div><div class='dateMonth text-center'><span>$dayMonthYear</span></div>";
}

function convAktifName($val)
{

  if ($val == "0") $sonuc = "Pasif";
  if ($val == "1") $sonuc = "Aktif";

  if ($val == "2") $sonuc = "Yönlendirilen";

  return $sonuc;
}

function convChkVal($val)
{
  $Number = "0";
  if (strtoupper($val) == "ON") $Number = "1";
  return $Number;
}
function convInt($Number)
{
  if ($Number == "") $Number = "0";
  return $Number;
}

function convNull($Number)
{
  //if($Number=="") $Number="null";
  if ($Number == "") $Number = "null";
  else $Number = "'" . $Number . "'";
  return $Number;
}

function convIntDef($Number, $Defult)
{
  if ($Number == "") $Number = $Defult;
  return $Number;
}
function convDefault($Value, $Defult)
{
  if ($Value == "") $Value = $Defult;
  return $Value;
}

function convString($Number)
{
  if ($Number == "0") $Number = "";
  return $Number;
}

function convMoney($number, $dec)
{

  if ($number == "" || !is_numeric($number)) $number = "0";

  $sayi = number_format($number, $dec, ",", ".");

  if ($dec == 0) $sayi = str_replace(",00", "", $sayi);

  return $sayi;
}

function convTrtoEng($text)
{
  $text = convAscitoTr(trim($text));
  $search = array('Ç', 'ç', 'Ğ', 'ğ', 'ı', 'İ', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü', ' ');
  $replace = array('C', 'c', 'G', 'g', 'i', 'I', 'O', 'o', 'S', 's', 'U', 'u', ' ');
  $new_text = str_replace($search, $replace, $text);
  return $new_text;
}



function convChk($Val)
{

  if ($Val) {
    return "checked=true";
  } else {
    return "";
  }
}

function groupConcatOption($delim, $string, $select)
{
  $strOption = "";

  $dzVal = explode(",", $string);
  for ($v = 0; $v < count($dzVal); $v++) {

    $dzKey = explode("$delim", $dzVal[$v]);
    $opt = $dzKey[0];
    $val = $dzKey[1];
    $sel = "";
    if ($select == $opt) $sel = "selected";
    $strOption .= "<option value=\"$opt\" $sel>$val</option>";
  }
  return $strOption;
}


function refererControl($SERVER)
{
  //yazPre($SERVER);
  $referer = $SERVER["HTTP_REFERER"];

  if (strpos($referer, $SERVER['SERVER_NAME']) < 1) {

    echo "<meta http-equiv='refresh' content='0;URL=/#oturum_ac_dialog'>";
    exit;
  }
}

$dzColorPalet = array("bg-light-blue-active", "bg-aqua-active", "bg-green-active", "bg-yellow-active", "bg-red-active", "bg-gray-active", "bg-teal-active", "bg-orange-active", "bg-maroon-active");
$dzColorBadge = array("badge-success", "badge-info", "badge-warning", "badge-danger", "badge-grey", "badge-success", "badge-info", "badge-warning", "badge-grey", "badge-danger");

function encrypt($string)
{

  if ($string == "") {
    echo "encrypt edilen değer boş olamaz";
    exit;
  }
  if (substr($string, -1) == " ") {
    echo "encrypt edilen değerin sonu boşluk olamaz";
    exit;
  }
  if (strlen($string) > 24) {
    echo "encrypt edilen değer 24 karakterden uzun olamaz";
    exit;
  }

  $cr = crypt($string, "");

  $rand = rand(1, 9);
  $rand2 = ceil($rand / 2);
  $string = substr($string . "" . str_repeat(" ", 30), 0, 30);

  $ycr = substr($cr, 0, $rand) . "" . substr($string, 0, 2) . "";
  $ycr .= substr($cr, $rand, $rand2) . "" . substr($string, 2, 2) . "";
  $ycr .= substr($cr, $rand2, $rand2) . "" . substr($string, 4, 2) . "";
  $ycr .= substr($cr, 6, 3) . "" . substr($string, 6, 2) . "";
  $ycr .= substr($cr, 1, 3) . "" . substr($string, 8, 2) . "";
  $ycr .= substr($cr, 5, 3) . "" . substr($string, 10, 2) . "";
  $ycr .= substr($cr, 1, 4) . "" . substr($string, 12, 4) . "";
  $ycr .= substr($cr, 4, 2) . "" . substr($string, 16, 4) . "";
  $ycr .= substr($string, 20, 10) . "$rand";

  return $ycr;
}

function doRandPass($pRet)
{


  if ($pRet <= "0") $pRet = 3;

  $chars = "abcdefghijkmnoprstuvwxyz023456789";
  srand((float)microtime() * 1000000);
  $i = 1;
  $pass = '';
  while ($i <= $pRet) {
    $num = rand() % 33;
    $tmp = substr($chars, $num, 1);
    $pass = $pass . $tmp;
    $i++;
  }
  return $pass;
}



function decrypt($string)
{
  $rand = substr($string, -1);
  if (!is_numeric($rand)) return "";
  $rand2 = ceil($rand / 2);
  $string = substr($string, 0, strlen($string) - 1);

  $pos = $rand;
  $ycr = substr($string, $pos, 2) . "";
  $pos += $rand2 + 2;
  $ycr .= substr($string, $pos, 2) . "";
  $pos += $rand2 + 2;
  $ycr .= substr($string, $pos, 2) . "";
  $pos += 3 + 2;
  $ycr .= substr($string, $pos, 2) . "";
  $pos += 3 + 2;
  $ycr .= substr($string, $pos, 2) . "";
  $pos += 3 + 2;
  $ycr .= substr($string, $pos, 2) . "";
  $pos += 4 + 2;
  $ycr .= substr($string, $pos, 4) . "";
  $pos += 2 + 4;
  $ycr .= substr($string, $pos, 4) . "";
  $pos += 4;
  $ycr .= substr($string, $pos, 55);
  return trim($ycr);
}

function doItXmlParse($result, $tag)
{

  $P1pos = strpos($result, "<$tag>");

  if ($P1pos > 0) {

    $P1pos += +strlen("<$tag>");
    $P2pos = strpos($result, "</$tag>");
    $sonuc = substr($result, $P1pos, ($P2pos - $P1pos));
  } else {
    $sonuc = "";
  }

  return $sonuc;
}



function isMe()
{
  if ($_SERVER['REMOTE_ADDR'] == "185.42.172.122") return "1";
  return "0";
}

function latestVersion($fileName)
{
  echo $fileName . "?" . filemtime(str_replace("../", "", $fileName));
}

function Curl($url)
{
  $user_agent = 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0';
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_TIMEOUT, 0);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);
  $result = curl_exec($curl);
  curl_close($curl);
  return $result;
}

function editorImgClean($text)
{
  $imgParent = '<div class="ke-component ke-image-container __ke__float-none" contenteditable="false">';
  $text = str_replace($imgParent, "", $text);
  $text = str_replace("</figure></div>", "</figure>", $text);
  return $text;
}

function editor($text)
{
  return addslashes(editorImgClean($text));
}

function seoOp($m)
{
  $sonuc = "";
  $gelen = array("ğ", "Ğ", "ü", "Ü", "ş", "Ş", "İ", "ı", "ö", "Ö", "ç", "Ç", " ", "+", '%', ".", ",", "?", "/", "!", "*", "=", "(", ")", "[", "]", "'", "|", "<", ">", "{", "}");
  $giden = array("g", "g", "u", "u", "s", "s", "i", "i", "o", "o", "c", "c", "-", "arti", "yuzde", "", "-", "", "", "", "", "", "-", "-", "-", "-", "", "", "-", "kucuktur", "buyuktur", "-", "-");
  $mecbu = array("-", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "r", "s", "t", "u", "v", "y", "z", "w", "x", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
  $m = strtolower(str_replace($gelen, $giden, $m));
  for ($i = 0; $i < strlen($m); ++$i) {
    if (array_search($m[$i], $mecbu)) {
      $sonuc .= $m[$i];
    } else {
      $sonuc .= " ";
    }
  }
  $sonuc = preg_replace('/\s+/', ' ', $sonuc);
  $sonuc = str_replace(" ", "-", $sonuc);
  return $sonuc;
}


function keywordsSet($keywords)
{
  $keywords = trim($keywords, ",");
  $keyExp = explode(",", $keywords);
  $keywords = "";
  foreach ($keyExp as $key => $value) {
    $keywords .= "<span>" . $value . "</span>";
  }
  return $keywords;
}

function eposta($eposta)
{
  if (filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
    return "";
  } else {
    return 'E-posta adresi geçersiz!';
  }
}

function ip()
{
  return $_SERVER['REMOTE_ADDR'];
}

function countryCode()
{
  $countryCode = file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/country") ?? null;

  if ($countryCode) {
    $countryCode = str_replace("\n", "", $countryCode);
  }

  return $countryCode;
}
