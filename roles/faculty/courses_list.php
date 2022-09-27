<?php
$dept_code = $_GET["dept_code"];
include "../../imports/config.php";
$sql = "select * from courses where dept_code = $dept_code";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row["course_code"] . "'>" . $row["course_name"] . "(" . $row["course_code"] . ")" . "</option>";
}
?>
<?php
if (isset($_POST["subject"])) {
    $sql = "select * from courses where course_code = '{$_POST["subject"]}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo "<option value='" . $_POST["subject"] . "' selected>" . $row["course_name"] . "(" . $row["course_code"] . ")" . "</option>";
}
?>
 
