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
			margin-top: 250px;
			margin-bottom: auto;
			font-weight: bold;
		}
	</style>
</head>
<body>
<p class="tengahin">
	<?php 
session_start();



$username = $_REQUEST['uname'];
$password = $_REQUEST['pwd'];

if ($username == 'Gib&Rest' and 
    $password == 'makanminum') {
	$_SESSION['login'] = true;
	echo 'Login Berhasil';
	header("refresh:3; url=session.php");
} 
else {
	echo 'Attempt Login Fail';
	header("refresh:2; url=login.php");
}
?>

</p>
<h4 style="text-align: center;">Redirecting...</h4>
</body>
</html>