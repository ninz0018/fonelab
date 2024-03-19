<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $user = htmlspecialchars($_POST["username"]);
    $pass = htmlspecialchars($_POST["pwd"]);
    $rPass = htmlspecialchars($_POST["rPwd"]);
    
    if (!empty(trim($user)) && !empty(trim($pass)) && trim($rPass) == $pass) {
        echo '<script>alert("Successfully Registered!!")</script>';  
    }
    else {
        echo '<script>alert("Password Dont Match!!")</script>';
    }
}