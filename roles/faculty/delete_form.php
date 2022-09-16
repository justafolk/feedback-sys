<?php 

session_start();
include '../../imports/config.php';

if ($_SESSION['role'] != 'Faculty') {
	echo "<script>alert('Invalid Session, please login again');</script>";
	echo "<script>window.location.href='../../index.php';</script>";
}

$fid = $_GET['id'];
//echo $fid;

$sql = "Delete from groups where id = '$fid'";
$result = mysqli_query($conn, $sql);
if ($result) {
    //echo "<script>alert('Deleted Successfully');</script>";
    echo "<script>window.location.href='./feedback_home.php';</script>";
} else {
    echo "<script>alert('Error');</script>";
    echo "<script>window.location.href='./feedback_home.php';</script>";
}


?>