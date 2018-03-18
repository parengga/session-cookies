<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
	<style type="text/css">
		.tengahin {
			text-align: center;
			font-size: 30px;
			color: #a7bb9f;
			font-family: arial;
			margin-top: 50px;
			margin-bottom: auto;
			font-weight: bold;
		}
		.box {
			width: 350px;
			height: 50px;
			font-size: 50px;
			font-weight: bold;
			font-family: arial;
			text-align: center;
		}
		.tombol {
			width: 200px;
			height: 100px;
			font-size: 30px;
			font-weight: bold;
			font-family: arial;
			text-align: center;
		
		}
	</style>
</head>
<body>
	<form action="login-2.php" method="post">
	<p class="tengahin">Masukkan Username<br> <input type="text" class="box" name="uname"></p>
	<p class="tengahin">Masukkan Password<br> <input type="Password" class="box" name="pwd"></p>
	<p class="tengahin"><input type="submit" class="tombol" value="Login" ></p>

	<p class="tengahin">Anda Menggunakan<br><br> <?php echo $browser?></p>
</form>
</body>
</html>