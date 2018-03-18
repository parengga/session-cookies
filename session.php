<?php
session_start();

    if(isset($_SESSION))
        $sudahLogin = $_SESSION['login'];
        
    if($sudahLogin == true) {
        date_default_timezone_set('Asia/Bangkok');
        if (date('G') >= 0 and date('G') <= 10) {
        	echo $browser;
        	echo '<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
	<style type="text/css">
		.tengahin{
			text-align: center;
			font-family: verdana;
			font-size: 90px;
			color: #d8d7d0;
			margin-top: 200px;
			text-shadow: 2px 2px #969696;
		}
		.background{
			background-image: url(http://thiswallpaper.com/cdn/hdwallpapers/927/Morning%20dew%20new%20wide%20hd%20wallpaper.jpg);
			background-size: 100%;
		}
	</style>
</head>
<body class="background">
<p class="tengahin">Good morning.</p>
</body>
</html>';
        }
        elseif (date('G')>= 11 and date('G') <= 15) {
        	echo '<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
	<style type="text/css">
		.tengahin{
			text-align: center;
			font-family: verdana;
			font-size: 90px;
			color: #5c6a82;
			margin-top: 250px;
			text-shadow: 2px 2px #ffffff;
		}
		.background{
			background-image: url(https://www.walldevil.com/wallpapers/a56/plane-wallpaper-sky-aircraft-clouds-bigest-images.jpg);
			background-size: 100%;
		}
	</style>
</head>
<body class="background">
<p class="tengahin">Good afternoon.</p>
</body>
</html>';
        }
        elseif (date('G')>=16 and date('G')<=18) {
        	echo '<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
	<style type="text/css">
		.tengahin{
			text-align: center;
			font-family: verdana;
			font-size: 90px;
			color: #586882;
			margin-top: 200px;
			text-shadow: 2px 2px #192230;
		}
		.background{
			background-image: url(http://www.hd-freewallpapers.com/sunset-hd-wallpaper/desktop-free-beautiful-hd-sunset-wallpapers.jpg);
			background-size: 100%;
		}
	</style>
</head>
<body class="background">
<p class="tengahin">Good afternoon.</p>
</body>
</html>';
        }
        elseif (date('G') >= 19 and date('G') <= 24) {
        	echo '<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
	<style type="text/css">
		.tengahin{
			text-align: center;
			font-family: verdana;
			font-size: 90px;
			color: #ffffff;
			margin-top: 200px;
			text-shadow: 2px 2px #192230;
		}
		.background{
			background-image: url(https://www.ihdimages.com/wp-content/uploadsktz/2014/11/beautiful_night_sky_hd_wallpapers.jpg);
			background-size: 100%;
		}
	</style>
</head>
<body class="background">
<p class="tengahin">Good evening.</p>
</body>
</html>';
        }
    } else {
        echo '
        <!DOCTYPE html>
        <html>
        <head>
        	<title></title>
        	<style>
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
        Anda Belum Login </p>
        <p style="font-size: 15px; text-align: center;">
        Redirecting...</p>
        </body>
        </html>';
        header("refresh:2; url=login.php");
    }
?>