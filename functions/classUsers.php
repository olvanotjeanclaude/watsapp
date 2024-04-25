<?php

 $sql=" SELECT * FROM USERS U
	     WHERE U.USERCODE='".decrypt($transUser)."' AND PASSWORD='".decrypt($transPassword)."' AND AKTIF='1' ";

//echo $sql;
//exit;

$row=query($dbConn,$sql);
if(@count($row)>0){
    
    $userCode=row($row,0,"USERCODE");
    $userId=$saveUserId=row($row,0,"ID");
    $usrCompanyId=row($row,0,"COMPANYID");
    $usrUserName=row($row,0,"USERNAME");
     
}else{
 echo "Kullanıcı Adı ve Şifrenizi Kontrol Ediniz!<br>Giriş yapmak için yönlendiriliyorsunuz...";
 echo '<meta http-equiv="refresh" content="5;URL='.$programAdress.'">';
 exit;
}
//echo $usrTask."<br>";
/*
if($usrTask != "7" AND $usrTask != "8" AND $usrTask != "10" AND $usrTask != "0"){
  echo "Bu kullanıcı bu alanı görmeye yetkili değil!<br>Giriş yapmak için yönlendiriliyorsunuz...";
  echo '<meta http-equiv="refresh" content="5;URL='.$programAdress.'">';
  exit;
}
*/

?>