<?php
error_reporting(0);

if(!session_start()) {
    // If the session couldn't start, present an error
 session_start();
 if ($_SESSION['role'] != 'Faculty') {
    echo "<script>alert('Invalid Session, please login again');</script>";
    echo "<script>window.location.href='../../index.php';</script>";
}
}
else{
    if ($_SESSION['role'] != 'Faculty') {
        echo "<script>alert('Invalid Session, please login again');</script>";
        echo "<script>window.location.href='../../index.php';</script>";
    }
}