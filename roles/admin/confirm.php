<?php

//confirm admin session 
//session_start();
error_reporting(0);
if ($_SESSION['role'] != "Admin") {
    header("Location: ../../index.php");
    exit();
}
?>