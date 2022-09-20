<?php 
include "../../imports/config.php";
session_start();
$sqls = "delete from form_ques where form_id=".$_POST['form_id'];
$result = mysqli_query($conn, $sqls);
$title = $_POST["form-title"];
$instructions = $_POST["instructions"];
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
var_dump($sliders_idk);
foreach ($mainquestions as $key => $value) { 
    if (in_array(explode("main-question",$key)[2], $sliders_idk)){
    $sql = "insert into form_ques (form_id, question_title, sub_content, type) values('$formid', \"$value[0]\", '".json_encode(array_slice($value, 1))."', 'slider')";
    echo "SLIDER KADE ALO";
    }
    elseif (count($value) > 1){
        $sql = "insert into form_ques (form_id, question_title, sub_content, type) values('$formid', '$value[0]', '".json_encode(array_slice($value, 1))."', 'mcq')";

    }
    elseif (in_array(explode(";",$key)[2], ["short"])){

        $sql = "insert into form_ques (form_id, question_title, sub_content, type) values('$formid', '$value[0]', '".json_encode(array_slice($value, 1))."', 'short')";
    }
    elseif (in_array(explode(";",$key)[2], ["long"])){

        $sql = "insert into form_ques (form_id, question_title, sub_content, type) values('$formid', '$value[0]', '".json_encode(array_slice($value, 1))."', 'long')";
    }
    echo $sql;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
