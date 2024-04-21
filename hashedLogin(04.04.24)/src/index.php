<html>
<head><title> Log in </title></head>
<body>Hey, it's a login page, you are welcome to log in or sign up </br></br>


<?php
echo <<< EOT
<form method="post" action="index.php">
<input type="text" name="login" placeholder="login"> </br>
<input type="password" name="password" placeholder="password"> </br> </br>
<input type="submit" value="Submit"> 
<span style="font-size:14px; margin-left:10px;"><a href="signup.php">Sign Up</a></span>
</form>



EOT;


?>

</body>
</html>