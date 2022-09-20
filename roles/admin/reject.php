<?php

include '../../imports/config.php';
session_start();
include 'confirm.php';

if ($_SESSION['role'] == "Admin") {
$id = $_GET['id'];
$deptcode = $_GET['deptcode'];

$sql = "UPDATE groups SET `rejected` = '1', `req`='0' WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: ./requested_feedback.php?deptcode=$deptcode");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
} else {
header("Location: ../index.php");
exit(); 
}  

?>