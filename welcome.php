<!DOCTYPE html>
<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
  echo "<script language='javascript' type='text/javascript'>
	alert('Anda Harus Login Terlebih Dahulu...!!!');
	</script>
	<meta http-equiv='refresh' content='0; url=index.php'>";  
}
else{
?>
<html>
	<head><link rel="shortcut icon" href="images/icon.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
		<title>.::Welcome::.</title>
	</head>
	
	<body>
		<div id=container>
			<div class=header>
				<div class=logo>
					<img src="images/logo.png" width=180px height=60px>
				</div>
				<div class=akun>
					<?php echo" $_SESSION[username]"; ?> | <a href="logout.php">Logout</a>
				</div>
			</div>
			<div class=content><center>
				<div class=slide><div align=left>
				<?php include "data/slide.txt"; ?>
				</div>
				</div>
				
				<div class=menu>
				<?php
				if ($_SESSION['leveluser']=='3'){
				?>
					<a href="?module=isi token">
						<div class=menudalam>
							Charge Token
						</div>
					</a>
					<a href="?module=beli token">
						<div class=menudalam>
							Buy Token
						</div>
					</a>
					<a href="?module=cek token">
						<div class=menudalam>
							Check Token
						</div>
					</a>
				<?php } ?>
				</div>
				
				<div class=isi>
					<?php include "data.php"; ?>
				</div>
			</div>
			<div class=footer>
				<p>Copyright &copy; 2016 by B.O.S.H Team</p>
			</div>
		</div>
	</body>
</html>
<?php } ?>