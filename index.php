<!DOCTYPE html>
<html>
	<head><link rel="shortcut icon" href="images/icon.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>.::Welcome::.</title>
	</head>
	
	<body>
		<div id=container>
			<div class=header>
				<div class=logo>
					<img src="images/logo.png" width=180px height=60px>
				</div>
				<div class=akun>
					<a href="eror.php">Help</a> | <a href="eror.php">Sign Up</a>
				</div>
			</div>
			<div class=content>
				<div class=login>
					<div class=logindalam>
						Login
					</div>
					<form method="POST" action="login_aksi.php">
					<table>
					<tr><td>Username</td>
						<td>:</td>
						<td><input type="text" name="username" value="" style="line-height:20px;" size=20></td>
					</tr>
					<tr><td>Password</td>
						<td>:</td>
						<td><input type="password" name="password" value="" style="line-height:20px;" size=20></td>
					</tr>
					<tr>
					<td colspan=3><center><br>
						<input type="submit" value="Sign In" style="width:80px;height:30px;color:white;background-color:#CD4646;cursor:pointer;">
						<input type=button value="Cancel" onclick=self.history.back() style="width:80px;height:30px;color:white;background-color:#CD4646;cursor:pointer;">
					</td></tr>
					</table>
					</form>
				</div>
				<div class=iklan>
					<img src="images/slide1.jpg" width=600px height=400px>
				</div>
			</div>
			<div class=footer>
				<p>Copyright &copy; 2016 by B.O.S.H Team</p>
			</div>
		</div>
	</body>
</html>