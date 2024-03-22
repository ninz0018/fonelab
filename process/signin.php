<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = htmlspecialchars($_POST["username"]);
    $pass = htmlspecialchars($_POST["pwd"]);
    
    if (!empty(trim($user)) && !empty(trim($pass))) {
        $_SESSION["user"] = "Invalid Password";
        header("Location: ../login/signinSuccss.php");
    }else {
        $_SESSION["pwd"] = "Invalid Password";
        header("Location: ../index.php");
    }
}