<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $user = htmlspecialchars($_POST["username"]);
    $pass = htmlspecialchars($_POST["pwd"]);
    $rPass = htmlspecialchars($_POST["rPwd"]);
    
    if (!empty(trim($user)) && !empty(trim($pass)) && trim($rPass) == $pass) {
        $_SESSION["sUp"] = "up";
        header("Location: ../index.php");
    }
    else {
        $_SESSION["match"] = "dontmatch";
        header("Location: ../index.php");
    }

    
}