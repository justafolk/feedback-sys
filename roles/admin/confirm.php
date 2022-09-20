<?php

//confirm admin session 
//session_start();
if ($_SESSION['role'] != "Admin") {
    header("Location: ../../index.php");
    exit();
}
?>