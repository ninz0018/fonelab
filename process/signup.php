<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $user = htmlspecialchars($_POST["username"]);
    $pass = md5($_POST["pwd"]);
    $rPass = md5($_POST["rPwd"]);
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

        $query1 = "SELECT * FROM users WHERE username = :username";   
        $stmt = $pdo->prepare($query1);    
        $stmt->bindParam(":username", $user);
        $stmt->execute(); 
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if($pass === $rPass && !$result) {
   
            $query = "INSERT INTO users (username, pwd, gmail) VALUES (:username, :pwd, :gmail);";
            
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":username", $user);
            $stmt->bindParam(":pwd", $pass);
            $stmt->bindParam(":gmail", $gmail);

           $stmt->execute();

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