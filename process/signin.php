<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = htmlspecialchars($_POST["username"]);
    $pass = md5($_POST["pwd"]);
    /* 
    if (!empty(trim($user)) && !empty(trim($pass))) {
        $_SESSION["user"] = "Invalid Password";
        header("Location: ../login/signinSuccss.php");
    }else {
        $_SESSION["pwd"] = "Invalid Password";
        header("Location: ../index.php");
    } */



    try {
        require_once "dbh.inc.php";
        
        $query = "SELECT * FROM users WHERE username = :username  And pwd = :pwd";   
        $stmt = $pdo->prepare($query);    
        $stmt->bindParam(":username", $user);
        $stmt->bindParam(":pwd", $pass);
        $stmt->execute(); 
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
        if($result) {

            $_SESSION["sUp"] = "up";
            header ("Location: ../login/signinSuccss.php");
            $pdo = null;
            $stmt = null;
            
            die();
        }else {
            $_SESSION["invalid"] = "dontmatch";
            header("Location: ../index.php");
        }
    } catch(PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

}