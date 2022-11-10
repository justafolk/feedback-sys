<?php 
include "../../imports/config.php";
$year = $_GET["year"];
$sql = "Select month(idate) as m from suggestions where YEAR(idate) = $year";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)){
  $monthNum  = $row["m"];
  $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
  echo "<option value='$monthNum'> {$monthName}</option>";
}
?>

