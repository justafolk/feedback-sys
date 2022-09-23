<?php 
include "../../imports/config.php";

session_start();

if ($_SESSION['role'] != 'Faculty') {
	echo "<script>alert('Invalid Session, please login again');</script>";
	echo "<script>window.location.href='../../index.php';</script>";
}
$title = $_POST["form-title"];
$instructions = $_POST["instructions"];
$sliders_idk = array();
foreach ($_POST as $key => $value) {
    if (strpos($key, "main-question") !== false) {
        $mainquestions[$key] = array($value) ;
    }
    elseif (strpos($key, "option-") !== false and strpos($key, "-text") !== false) {
        array_push($mainquestions["main-question_main-question".explode("-", $key)[1]], $value);
    }
    elseif (strpos($key, "slider-title") !== false) {
        $slidertitle = $value;
        $num = explode("title", explode("-", $key)[2]);
        $num = end($num);
        array_push($mainquestions["main-question_main-question".$num], $value);
        # code...
        array_push($sliders_idk, $num);
    }

}
// create table from mainquestions array
$table = "<table class=\"table table-striped\">";
$table .= "<thead><tr><th>Question</th><th>Options</th><th>Multiple Selections</th></tr></thead>";
$table .= "<tbody>";
foreach ($mainquestions as $key => $value) {
    $table .= "<tr>";
    $table .= "<td>".$value[0]."</td>";
    $table .= "<td>";
    for ($i=1; $i < count($value); $i++) {
        $table .= $value[$i]."<br>";
    }
    $table .= "</td>";
    $table .= "<td>";
    if (strpos($key, "multi-") !== false) {
        $table .= "Yes";
    }
    else {
        $table .= "No";
    }
    $table .= "</td>";
    $table .= "</tr>";
}
$table .= "</tbody>";
$table .= "</table>";

echo $table;

include "./imports/config.php";
$ss = "select * from groups where id={$_POST["group_id"]}";
$ss = mysqli_query($conn, $ss);

$ss = mysqli_fetch_assoc($ss);
$ss = $ss["deptcode"];
echo $ss;
$sql = "insert into forms (author, ini_date, instructions, status, course_name, dept_code, group_id) values( '{$_SESSION["name"]}', now(), '$instructions', 'online','{$_POST["course_name"]}', '$ss', {$_POST["group_id"]})";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$formid = mysqli_insert_id($conn);
echo $formid;
foreach ($mainquestions as $key => $value) { 
    if (in_array(explode("main-question",$key)[2], $sliders_idk)){
    $sql = "insert into form_ques (form_id, question_title, sub_content, type) values('$formid', \"$value[0]\", '".json_encode(array_slice($value, 1))."', 'slider')";
    }
    elseif (count($value) > 1){
        $sql = "insert into form_ques (form_id, question_title, sub_content, type) values('$formid', '$value[0]', '".json_encode(array_slice($value, 1))."', 'mcq')";

    }
    else{

        $sql = "insert into form_ques (form_id, question_title, sub_content) values('$formid', '$value[0]', '".json_encode(array_slice($value, 1))."')";
    }
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
