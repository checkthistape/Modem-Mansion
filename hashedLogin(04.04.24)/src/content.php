<!DOCTYPE html>
<html>
<head><title> Hub </title></head>
<body>Hey, it's a main page, would you like to check our content? </br></br>


<?php
// Start the session
session_start();

$_SESSION['login'] = null;
$logStatus = false;

if(isset($_SESSION['login'])){ $logStatus = true; }
else { $_SESSION['login'] = null; $logStatus = false; }




echo <<< EOT
<img src="../img/image.jpg" width="375px" height="205px"> <br><br>

EOT;

if($logStatus == false){
    echo <<< EOT
    <p id="not-log">To show more you need to <a href="signin.php">sign in!</a></p>
    EOT;
}
else {
    echo <<< EOT
    <img src="../img/image2.jpg" width="375px" height="205px"> <br><br>
    EOT;
}


?>
<p style="font-size:40px; font-weight:bold; margin-top:-20px;">Terms and Conditions</p>
</body>
</html>