<?php

include '../../imports/config.php';
session_start();

$instructions= ' Note: 
- Please fill the survey questions and ratings in the order of your preference.
- Extreme left indicates postive and extreme right indicates negative. 
- If any difficulty is encountered, please contact your respective supervisor. ';

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
    
    $sql2 = "INSERT INTO `forms` (`form_id`, `author`, `ini_date`, `instructions`, `status`, `semester`, `course_code`,`dept_code`, `group_id`, `default_ques`, `total_students`, `filled_students`, `done`) 
    VALUES ('$id', '$teachername', '$ini_date', '$instructions', '0','$semester', '$course_code', '$deptcode', '$id', '1', '$totalstudents', '0', '0');";
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