<?php
include "koneksi.php";
$password=md5($_POST['password']);
$cari=mysql_query("select* FROM dt_user WHERE username='$_POST[username]' AND password='$password'");
$ketemu=mysql_num_rows($cari);
$r=mysql_fetch_array($cari);

if ($ketemu>0){
	session_start();
  $_SESSION[user_id]      = $r[user_id];
  $_SESSION[username]     = $r[username];
  $_SESSION[password]     = $r[password];
  $_SESSION[leveluser]    = $r[level_user];
  
  
  if($_SESSION[leveluser]==1){
	header('location:welcome.php?module=beranda');
  } else if($_SESSION[leveluser]==2){
	header('location:welcome.php?module=beranda');
  } if($_SESSION[leveluser]==3){
	header('location:welcome.php?module=beranda');
  }
}
else{
echo"
	<script language='javascript' type='text/javascript'>
	alert('Password Salah...!!!');
	</script>
	<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>