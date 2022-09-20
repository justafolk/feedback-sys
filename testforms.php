<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

$url = $_GET["url"];
$page = file_get_contents($url);
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($page);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A3', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>