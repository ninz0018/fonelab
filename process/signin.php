<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = htmlspecialchars($_POST["username"]);
    $pass = htmlspecialchars($_POST["pwd"]);
    
    if (!empty(trim($user)) && !empty(trim($pass))) {
        header("Location: ../login/signinSuccss.php");
    }else {
        echo '<script> alert("Invalid Password")</script>';
    }
}