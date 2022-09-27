<?php

//session_start();
if ($_SESSION['role'] != "Student") {
    echo "<script>alert('Invalid Session, please login again');</script>";
    echo "<script>window.location.href='../../index.php';</script>";
    //header("Location: ../../../index.php");
    exit();
}
?>