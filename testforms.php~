<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "./imports/config.php";

$sql = "select * from groups";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row["fdate"];
$date = date("Y", strtotime($row["fdate"]));
echo $date;


?>
