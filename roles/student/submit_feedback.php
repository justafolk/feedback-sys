<?php
session_start();
include 'confirm.php';
include "../../imports/config.php";
// print all post data in table
var_dump($_POST);
foreach ($_POST as $key => $value) {
    if ($key == "form_id") {
        $form_id = $value;
        continue;
        
    } elseif (strpos($key, "long") !== false) {
        continue;
    }
     else {
        $_POST[$key] = round($value) ;
    }
}

var_dump($_POST);
$form_id = $_POST["form_id"];
array_pop($_POST);
$res = json_encode($_POST, true);
$sql = "insert into form_responses(student_id, form_id, filldate, response_json) values ('{$_SESSION["uname"]}', '{$form_id}', now(), '{$res}')";

$result = mysqli_query($conn, $sql);
if ($result) {
    
    //echo "success";
    header("Location: ./index.php");
} else {
    echo "fail";
    exit();
}

?>
