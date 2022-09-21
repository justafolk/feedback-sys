<?php

//session_start();
if ($_SESSION['role'] != "Student") {
    header("Location: ../../index.php");
    exit();
}
?>