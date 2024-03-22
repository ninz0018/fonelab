<?php
    session_start();
    $_SESSION["logout"] = "labas";
    header("Location: ../index.php");

?>