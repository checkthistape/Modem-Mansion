<html>
<head><title> Sign in </title></head>
<body>
    
Sign in </br></br>


<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=logowaniedb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<script> alert('Connected successfully!'); </script>";
}
catch(PDOException $e){
    echo '<script> alert("Error with db connection! '.$e->getMessage().' "); </script>';
}

?>


<form method="post" action="signin.php" onsubmit="return pswdValidate(event)">

<input type="text" name="login" placeholder="login" id="login"> </br>
<span style="font-size:12px; color: red" id="loginNotEmpty"></span> <br>

<input type="password" name="password" placeholder="password" style="margin-bottom:6px;" id="pass"> </br>
<span style="font-size:12px; color: red" id="passNotEmpty"></span> <br>
 </br>

</br>

<input type="submit" value="submit">
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
    
    if(loginFilled()!=false){
        if( document.getElementById("pass").value !== "" && document.getElementById("pass").value != null ){ return true; }
        else if( document.getElementById("pass").value === "" || document.getElementById("pass").value == null ){ document.getElementById("passNotEmpty").innerText = "password can not be empty"; return false; }
        else { return false; }
        
    }
    else {
        if( document.getElementById("pass").value == "" || document.getElementById("pass").value == null ){ document.getElementById("passNotEmpty").innerText = "password can not be empty"; }
        return false;
    }
    
}
</script>


<?php


if($_SERVER["REQUEST_METHOD"] === "POST"){

    // Login validation
    if(!isset($_POST['login']) || empty($_POST['login'])){
        exit;
        return false;

    }
    else {
        $login = $_POST['login'];
    }

    // Password validation
    if(!isset($_POST['password']) || empty($_POST['password'])){
        exit;
        return false;
    }
    else {
        $password = $_POST['password'];
    }


    if(!empty($_POST)){
        if(isset($_POST["login"]) && !empty($_POST["password"])){
            try {
                $sql = "SELECT username FROM user WHERE username = $login";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$login]);

                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach(new Table)

                echo "<script>alert('Data was sent!');</script>";
                echo "Password: ".$password. " login: ".$login;
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

}



?>

</body>
</html>