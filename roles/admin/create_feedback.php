<?php 
include "../../imports/config.php";
session_start();
error_reporting(0);
include 'confirm.php';

var_dump($_POST);
$sqls = "delete from form_ques where form_id=".$_POST['form_id'];
$result = mysqli_query($conn, $sqls);
$title = $_POST["form-title"];
$sliders_idk = array();
$instructions = $_POST["instructions"];
foreach ($_POST as $key => $value) {
    if (strpos($key, "main-question") !== false) {
        
        $mainquestions[$key] = array($value) ;
        
    }
    elseif (strpos($key, "option-") !== false and strpos($key, "-text") !== false) {
        array_push($mainquestions["main-question_main-question".explode("-", $key)[1]], $value);
    }
    elseif (strpos($key, "slidercount") !== false) {
        $slidertitle = $value;
        $num = explode("count",  $key);
        $num = end($num);
    echo $num;
        array_push($mainquestions["main-question_main-question".$num], $value);
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
    $table .= "<td>".$key."</td>";

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
$formid = $_POST['form_id'];

$form_sql = "update forms set default_ques='$formid' where form_id = '$formid' ";
$result = mysqli_query($conn, $form_sql);
if (!$result){
  echo "SOME ERROR";
}

var_dump($sliders_idk);
foreach ($mainquestions as $key => $value) { 
    if (in_array(explode("main-question",$key)[2], $sliders_idk)){
    $sql = "insert into form_ques (form_id, question_title, sub_content, type) values('$formid', \"$value[0]\", '".json_encode(array_slice($value, 1))."', 'slider')";
    echo "SLIDER KADE ALO";
    }
    elseif (count($value) > 1){
        $sql = "insert into form_ques (form_id, question_title, sub_content, type) values('$formid', '$value[0]', '".json_encode(array_slice($value, 1))."', 'mcq')";

    }
    elseif (in_array($value, ["short"])){

        $sql = "insert into form_ques (form_id, question_title, sub_content, type) values('$formid', '$value[0]', '".json_encode(array_slice($value, 1))."', 'short')";
    }
    elseif (strpos($key, "long") != false ){

        $sql = "insert into form_ques (form_id, question_title, sub_content, type) values('$formid', '$value[0]', '".json_encode(array_slice($value, 1))."', 'long')";
    }
    echo $sql;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        exit();
    }
header("Location: ./index.php?flag=done");

}

header("Location: ./index.php?flag=done");
