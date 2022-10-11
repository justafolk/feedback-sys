<?php

include '../../imports/config.php';
session_start();
error_reporting(0);
$instructions= ' Note: 
- Please fill the survey questions and ratings in the order of your preference.
- Extreme left indicates postive and extreme right indicates negative. 
- If any difficulty is encountered, please contact your respective supervisor. ';
$default_ques = '1';
if ($_SESSION['role'] == "Admin") {
$id = $_GET['id'];
$deptcode = $_GET['deptcode'];

$sql = "UPDATE groups SET `accepted` = '1', `req`='0' WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {

    $teacherid = "select * from groups where id = '$id'";
    $teacherid = mysqli_query($conn, $teacherid);
    $teacherid = mysqli_fetch_assoc($teacherid);
    $teacherid = $teacherid['teacher_id'];

    $teachername = "select * from login where id = '$teacherid'";
    $teachername = mysqli_query($conn, $teachername);
    $teachername = mysqli_fetch_assoc($teachername);
    $teachername = $teachername['name'];

    $data = "select * from `groups` where `id` = '$id'";
    $data = mysqli_query($conn, $data);
    $data = mysqli_fetch_assoc($data);

    $ini_date = $data['fdate'];
    $course_code = $data['subject'];
    $totalstudents = $data['student_count'];
    $semester = $data['semester'];

    $date_year = date("Y", strtotime($ini_date));
    $date_month = date("m", strtotime($ini_date));
                    
    if ($date_month >= 8) {
        $academic = $date_year . "-" . ($date_year + 1);
    } else {
        $academic = ($date_year - 1). "-" .$date_year ;
    }
    /*
    echo 'id = '.$id.'<br>';
    echo 'author = '.$teachername.'<br>';
    echo 'ini_date = '.$ini_date.'<br>';
    echo 'instructions = '.$instructions.'<br>';
    echo 'status = 1<br>';
    echo 'course_code = '.$course_code.'<br>';
    echo 'deptcode = '.$deptcode.'<br>';
    echo 'totalstudents = '.$totalstudents.'<br>';
*/
    if (strpos(strtolower($course_code),'office') !== false){
        $default_ques = "2";
    }
    elseif (strpos(strtolower($course_code),'library') !== false){
        $default_ques = "3";
    }

    $sql2 = "INSERT INTO `forms` (`form_id`, `author`, `ini_date`, `instructions`, `status`, `semester`, `course_code`,`dept_code`, `group_id`, `default_ques`, `total_students`, `academic_year`) 
    VALUES ('$id', '$teachername', '$ini_date', '$instructions', '0','$semester', '$course_code', '$deptcode', '$id', '1', '$totalstudents', '$academic');";
    $result2 = mysqli_query($conn, $sql2);

    if($result2){
        header("Location: ./requested_feedback.php?deptcode=$deptcode");
        exit();
    } else {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
    }
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
} else {
header("Location: ../index.php");
exit();     
}  

?>