<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $user = htmlspecialchars($_POST["username"]);
    $pass = htmlspecialchars($_POST["pwd"]);
    $rPass = htmlspecialchars($_POST["rPwd"]);
    $gmail = $_POST["gmail"];
    
 /*   if (!empty(trim($user)) && !empty(trim($pass)) && trim($rPass) == $pass) {
        $_SESSION["sUp"] = "up";
        header("Location: ../index.php");
    }
    else {
        $_SESSION["match"] = "dontmatch";
        header("Location: ../index.php");
    }  */

    try {
        require_once "dbh.inc.php";
        
        if($pass === $rPass) {
   
            $query = "INSERT INTO users (username, pwd, gmail) VALUES (?, ?, ?);";
            
            $stmt = $pdo->prepare($query);
            $stmt->execute([$user, $pass, $gmail]);

            $pdo = null;
            $stmt = null;
            $_SESSION["sUp"] = "up";
            header ("Location: ../index.php");
            
            die();
        }else {
            $_SESSION["match"] = "dontmatch";
            header("Location: ../index.php");
        }
    } catch(PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

    
}else {
    header ("Location: ../index.php");
}