<?php
session_start();

$feedbackid = $_GET['id'];

$formid = $feedbackid;
$author = $_SESSION['name'];

?>