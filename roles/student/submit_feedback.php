<?php
session_start();
include "../../imports/config.php";
// print all post data in table
$res = json_encode($_POST, true);
$sql = "insert into form_responses(student_id, form_id, filldate, response_json) values ('{$_SESSION["uname"]}', '{$_POST["form_id"]}', now(), '{$res}')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "success";
    header("Location: ./index.php");
} else {
    echo "fail";
    exit();
}

?>