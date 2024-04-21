<html>
<head><title> Sign up </title></head>
<body>
    
Sign up </br></br>


<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=logowaniedb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<script>alert('Connected successfully!');</script>";
}
catch(PDOException $e){
    echo '<script>alert("Error with db connection! '.$e->getMessage().' ");</script>';
}

?>


<form method="post" action="signin.php" onsubmit="return pswdValidate(event)">

<input type="text" name="login" placeholder="login" id="login"> </br>
<span style="font-size:12px; color: red" id="loginNotEmpty"></span> <br>

<input type="password" name="password1" placeholder="password" style="margin-bottom:6px;" id="pswd1"> </br>
<span style="font-size:12px;">write password again</span> </br>

<input type="password" name="password2" placeholder="password" style="margin-top:6px; margin-bottom:2px;" id="pswd2"> </br>
<span style="font-size:12px; color: red" id="warning"></span> </br>  </br>

<input type="submit" value="submit" >
</form>

<script>
function loginFilled(){
    
    if(document.getElementById("login").value == "" || document.getElementById("login").value == null){
        document.getElementById("loginNotEmpty").innerText = "login can not be empty";
        return false;
    }
    else {
        document.getElementById("loginNotEmpty").innerText = "";
        return true;
    }
}

function pswdValidate(){
    loginFilled();  

    if( document.getElementById("pswd1").value == "" || document.getElementById("pswd1").value == null ){
        document.getElementById("warning").innerText = "passwords can not be empty";
        return false;
    }
    else if( document.getElementById("pswd1").value == document.getElementById("pswd2").value  )
    {
        document.getElementById("warning").innerText = "";
        alert("its good");
        return true;
    }
    else {
        document.getElementById("warning").innerText = "passwords are not the same";
        return false;
    }
    
    
}
</script>


<?php
if(!empty($_POST)){
    if(isset($_POST["login"]) && !empty($_POST["password1"])){
        try {
            echo "<script>alert('Data was sent!');</script>";
        }
        catch(Exception $e){
            echo "";
        }
    }
    else 
    {
        echo "<script>alert('Bad! Data was not sent!');</script>";
    }
}

?>

</body>
</html>