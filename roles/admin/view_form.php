<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>CWIT-Feedback Portol</title>
	
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<style>
        .my-custom-scrollbar {
            position: relative;
            height: 235px;
            width: 100%;
            overflow: auto;
        }
        .table-wrapper-scroll-y::-webkit-scrollbar { 
            display: none; 
        }
        .table-wrapper-scroll-y { 
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body>
    <?php
    function if_exists($conn, $name) {
        require_once "../../imports/config.php";
        $sql = "SELECT * FROM feedbacks WHERE f_name = ?;";
        $smt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($smt, $sql)){
            header("location: authentication-signup.php/?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($smt, "s", $name);
        mysqli_stmt_execute($smt);
        $resultData = mysqli_stmt_get_result($smt);
        if($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
    }
    function active($conn, $name) {
        require_once "../../imports/config.php";
        $sql = "SELECT active FROM feedbacks WHERE f_name = ?;";
        $smt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($smt, $sql)){
            header("location: authentication-signup.php/?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($smt, "s", $name);
        mysqli_stmt_execute($smt);
        $resultData = mysqli_stmt_get_result($smt);
        if($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
    }
    ?>
	<div class="wrapper">
        <?php
            session_start();
            include 'sidebar.php';
        ?>
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
			<div>
                <?php

                include '../../imports/config.php';

                 $deptcode = $_GET['deptcode'];
                    $sql = "SELECT * FROM departments WHERE dept_id = '$deptcode'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $deptname = $row['dept_name'];
                ?>
				<h1 class="h3 mb-0"><strong>View Form | <?php echo $deptname; ?></strong></h1>
			</div>
			<?php
				include "notification.php";
			?>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle" id="name">Computer Department</h1>
					</div>
						<button class="btn btn-primary me-3" id="home-tab">1st Year</button>
						<button class="btn btn-primary me-3" id="list-tab">2nd Year</button>
						<button class="btn btn-primary me-3" id="list2-tab">3rd Year</button>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row mt-3">
                                <div class="table-responsive">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="">
                                                <div class="mb-1">
                                                    <h5 class="mb-4 card-title">Winter Seasons | 1st Semester</h5>
                                                    <table class="table text-center">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Sr. No</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Course Code</th>
                                                                <th scope="col">Teacher Name</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Action</th>
                                                                <th scope="col">View</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $data = array();
                                                                $sql = "";
                                                                $j=0;
                                                                $sql = "SELECT * FROM courses";
                                                                $result = mysqli_query($conn, $sql);
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    $data[$j] = $row;
                                                                    $j++;
                                                                }

                                                                for($i=0;$i<$j;$i++){
                                                                    if(isset($_POST["id".$i])){
                                                                        $id = $_POST["id".$i];
                                                                        $name = $data[$i]["course_name"];
                                                                        $code = $data[$i]["course_code"];
                                                                        $tname = $data[$i]["teacher"];
                                                                        $status = "Not Done";
                                                                        $error = 1;
                                                                        $date = date("Y-m-d");
                                                                        if($tname == NULL){
                                                                            $tname = "@mda";
                                                                        }
                                                                        $check = if_exists($conn, $name);
                                                                        $sql1 = "SELECT * from teacher";
                                                                        $t=0;
                                                                        $cc = array();
                                                                        $teacher = array();
                                                                        $result = mysqli_query($conn, $sql1);
                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                            $teacher[$t] = $row;
                                                                            $t++;
                                                                        }
                                                                        for($c=0;$c<$t;$c++){
                                                                            $cc = explode(",",$teacher[$c]["course"]);
                                                                            if(in_array($code, $cc)){
                                                                                $tname = $teacher[$c]["name"];
                                                                                $error = 0;
                                                                                if($id == "Inactive"){
                                                                                    if($check == NULL){
                                                                                        $sql = "INSERT INTO feedbacks (f_name,cors_code,faculty_name, f_sdate, status, active) values('$name','$code','$tname','$date','$status',1)";
                                                                                        $result = mysqli_query($conn, $sql);
                                                                                    }
                                                                                    else{
                                                                                        $sql = "update feedbacks set f_name = '$name', cors_code = '$code',faculty_name = '$tname', status = '$status', f_sdate = '$date', active = '1' where f_id = '$check[f_id]';";
                                                                                        $result = mysqli_query($conn, $sql);
                                                                                    }
                                                                                }
                                                                                else{
                                                                                    $sql = "update feedbacks set f_name = '$name', cors_code = '$code',faculty_name = '$tname', status = '$status', f_edate = '$date', active = '0' where f_id = '$check[f_id]';";
                                                                                    $result = mysqli_query($conn, $sql);
                                                                                }
                                                                            }
                                                                        }
                                                                        if($error){
                                                                            echo "<script>alert('Teacher doesnt exists');</script>";
                                                                        }
                                                                        // if($check == NULL){
                                                                        //     $sql = "INSERT INTO feedbacks (f_name,cors_code,faculty_name, f_sdate, status, active) values('$name','$code','$tname','$date','$status',1)";
                                                                        //     $result = mysqli_query($conn, $sql);
                                                                        // }
                                                                        // else{
                                                                        //     
                                                                        // }
                                                                    }
                                                                }

                                                                include "../../imports/config.php";
                                                                $feedbacks = array();
                                                                $sql = "";
                                                                $a=0;
                                                                $sql = "SELECT * FROM feedbacks";
                                                                $result = mysqli_query($conn, $sql);
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    $feedbacks[$a] = $row;
                                                                    $a++;
                                                                }
                                                                
                                                            ?>
                                                            <form method="post" action="">
                                                                <?php 
                                                                    for($i=0;$i<$j;$i++){
                                                                    $check = active($conn, $data[$i]["course_name"])
                                                                ?>
                                                                <tr>
                                                                    <th scope="row"><?php echo $i+1; ?></th>
                                                                    <td><?php echo $data[$i]["course_name"]; ?></td>
                                                                    <td><?php echo $data[$i]["course_code"]; ?></td>
                                                                    <td><?php for($b=0;$b<$j;$b++){
                                                                        if($data[$i]["course_name"] == $feedbacks[$b]["f_name"]){
                                                                            echo $feedbacks[$b]["faculty_name"]; 
                                                                        }
                                                                        else{
                                                                            echo ""; 
                                                                        }
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                    <?php for($b=0;$b<$j;$b++){
                                                                        if($data[$i]["course_name"] == $feedbacks[$b]["f_name"]){
                                                                            if($check["active"]){
                                                                                echo $feedbacks[$b]["f_sdate"]; 
                                                                            }
                                                                            else{
                                                                                echo $feedbacks[$b]["f_sdate"]; 
                                                                            }
                                                                        }
                                                                        else{
                                                                            echo "";
                                                                        }
                                                                        }
                                                                    ?>
                                                                    </td>
                                                                    <th><?php for($b=0;$b<$j;$b++){
                                                                        if($data[$i]["course_name"] == $feedbacks[$b]["f_name"]){
                                                                            echo $feedbacks[$b]["status"]; 
                                                                        }
                                                                        else{
                                                                            echo ""; 
                                                                        }
                                                                        }
                                                                        ?></th>                                                         
                                                                    <td><?php
                                                                        if($check['active']){
                                                                        ?><input class="btn btn-success" type="submit" name="id<?php echo $i; ?>" value="Active"></td><?php
                                                                        }
                                                                        else{
                                                                            ?><input class="btn btn-danger" type="submit" name="id<?php echo $i; ?>" value="Inactive"></td><?php
                                                                        }
                                                                        ?>
                                                                    <td><button type="button" class="btn btn-primary" id="id2">View</button></td>
                                                                </tr>
                                                                <?php
                                                                    }
                                                                ?>
                                                            </form>
                                                            <!-- <script>
                                                                id1.onclick = function() {
                                                                    var id1 = document.getElementById("id1");
                                                                    if(id1.classList == "btn btn-success"){
                                                                        id1.classList.remove('btn-success');
                                                                        id1.classList.add('btn-danger');
                                                                        id1.value="Inactive";
                                                                    }
                                                                    else{
                                                                        id1.classList.remove('btn-danger');
                                                                        id1.classList.add('btn-success');
                                                                        id1.value="active";
                                                                        $(document).ready(function(){
                                                                            $("#id1").click(function(){
                                                                                var data = $("#user_form").serialize()+"&id1=id1";
                                                                                $.ajax({
                                                                                    url:"insert_data.php",
                                                                                    type:"post",
                                                                                    data:data,
                                                                                    success:function(response){
                                                                                        $("#msg").text(response);
                                                                                    }
                                                                                });
                                                                            });
                                                                        })
                                                                    }
                                                                }
                                                                // function myFunction(){
                                                                //     color = document.getElementById("id1").style.color;
                                                                //     if(color = "red"){
                                                                //         id1.classList.remove("btn-primary");
                                                                //         id1.classList.add("btn-success");
                                                                //     }
                                                                //     else{
                                                                //         id1.classList.remove("btn-primary");
                                                                //         id1.classList.remove("btn-success");

                                                                //     }
                                                                // }
                                                            </script> -->
                                                            <!-- <tr>
                                                                <th scope="row">2</th>
                                                                <td>Basic Physics</td>
                                                                <td>R18SC1703</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <th>Done</th>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id3">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>English</td>
                                                                <td>R18SC1707</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id4">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Engineering Graphic Skills</td>
                                                                <td>R18ME1210</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id5">View</button></td>
                                                            </tr> 
                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>Programming in C</td>
                                                                <td>R18CP3401</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id6">View</button></td>
                                                            </tr> -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="">
                                                <div class="mb-1">
                                                    <h5 class="mb-4 card-title">Summer Seasons | 2st Semester</h5>
                                                    <table class="table text-center">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Sr. No</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Course Code</th>
                                                                <th scope="col">Teacher Name</th>
                                                                <th scope="col">Total Questions</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Action</th>
                                                                <th scope="col">View</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Basic Mathematics</td>
                                                                <td>R18SC1701</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <th>Not Done</th>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id7">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Basic Physics</td>
                                                                <td>R18SC1703</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <th>Done</th>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id8">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>English</td>
                                                                <td>R18SC1707</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id9">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Engineering Graphic Skills</td>
                                                                <td>R18ME1210</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id10">View</button></td>
                                                            </tr> 
                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>Programming in C</td>
                                                                <td>R18CP3401</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id11">View</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
						<div id="profile">
                            <div class="row mt-3">
                                <div class="table-responsive">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="">
                                                <div class="mb-1">
                                                    <h5 class="mb-4 card-title">Winter Seasons | 3st Semester</h5>
                                                    <table class="table text-center">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Sr. No</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Course Code</th>
                                                                <th scope="col">Teacher Name</th>
                                                                <th scope="col">Total Questions</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Action</th>
                                                                <th scope="col">View</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Basic Mathematics</td>
                                                                <td>R18SC1701</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <th>Not Done</th>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id12">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Basic Physics</td>
                                                                <td>R18SC1703</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <th>Done</th>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id13">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>English</td>
                                                                <td>R18SC1707</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id14">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Engineering Graphic Skills</td>
                                                                <td>R18ME1210</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id15">View</button></td>
                                                            </tr> 
                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>Programming in C</td>
                                                                <td>R18CP3401</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id16">View</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="">
                                                <div class="mb-1">
                                                    <h5 class="mb-4 card-title">Summer Seasons | 4st Semester</h5>
                                                    <table class="table text-center">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Sr. No</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Course Code</th>
                                                                <th scope="col">Teacher Name</th>
                                                                <th scope="col">Total Questions</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Action</th>
                                                                <th scope="col">View</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Basic Mathematics</td>
                                                                <td>R18SC1701</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <th>Not Done</th>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id17">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Basic Physics</td>
                                                                <td>R18SC1703</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <th>Done</th>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id18">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>English</td>
                                                                <td>R18SC1707</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id19">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Engineering Graphic Skills</td>
                                                                <td>R18ME1210</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id20">View</button></td>
                                                            </tr> 
                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>Programming in C</td>
                                                                <td>R18CP3401</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id21">View</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>						
                        <div id="list1">
                            <div class="row mt-3">
                                <div class="table-responsive">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="">
                                                <div class="mb-1">
                                                    <h5 class="mb-4 card-title">Winter Seasons | 5st Semester</h5>
                                                    <table class="table text-center">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Sr. No</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Course Code</th>
                                                                <th scope="col">Teacher Name</th>
                                                                <th scope="col">Total Questions</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Action</th>
                                                                <th scope="col">View</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Basic Mathematics</td>
                                                                <td>R18SC1701</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <th>Not Done</th>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id22">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Basic Physics</td>
                                                                <td>R18SC1703</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <th>Done</th>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id23">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>English</td>
                                                                <td>R18SC1707</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id24">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Engineering Graphic Skills</td>
                                                                <td>R18ME1210</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id25">View</button></td>
                                                            </tr> 
                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>Programming in C</td>
                                                                <td>R18CP3401</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id26">View</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="">
                                                <div class="mb-1">
                                                    <h5 class="mb-4 card-title">Summer Seasons | 6st Semester</h5>
                                                    <table class="table text-center">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Sr. No</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Course Code</th>
                                                                <th scope="col">Teacher Name</th>
                                                                <th scope="col">Total Questions</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Action</th>
                                                                <th scope="col">View</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Basic Mathematics</td>
                                                                <td>R18SC1701</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <th>Not Done</th>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id27">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Basic Physics</td>
                                                                <td>R18SC1703</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <th>Done</th>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id28">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>English</td>
                                                                <td>R18SC1707</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id29">View</button></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Engineering Graphic Skills</td>
                                                                <td>R18ME1210</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id30">View</button></td>
                                                            </tr> 
                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>Programming in C</td>
                                                                <td>R18CP3401</td>
                                                                <td>@mdo</td>
                                                                <td>7</td>
                                                                <td>Not Done</td>
                                                                <td><button class="btn btn-primary" id="id1">Allow Access</button></td>
                                                                <td><button class="btn btn-primary" id="id31">View</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
                        <div id="profile2">
							<div class="row">
								<div class="row	">
									<div class="col-sm-10 col-md-8 col-lg-6 mx-auto h-100 mt-4">
										<div class="align-middle">
											<div class="card">
												<div class="card-body">
													<div class="justify-content-between d-flex">
														<div class="mb-3">
															<h3 class="h3">Programming in C</h3>
															<h5 class="h5">Teachers Name</h5>								
														</div>
                                                        <div class="mb-3">
                                                            <h5 class="h5   ">Date: 10/10/2021</h5>
    													</div>
													</div>
												</div>
											</div>
                                            <div class="card">
												<div class="card-body">
													<div class="">
														<div class="mb-1">
															<h5 class="mb-4 card-title">Description</h5>
                                                            <p class="h4">Cusrow Wadia Institute of Technology, Pune</p>
															<!-- <textarea>The Cusrow Wadia Institute of Technology, Pune<textarea> -->
														</div>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-body">
													<div class="">
														<div class="mb-1">
															<h5 class="mb-4 card-title">Short Answers</h5>
															<h4 class="h4">Q1. Enter your name</h4>
														</div>
													</div>
												</div>
											</div>
                                            <div class="card">
												<div class="card-body">
													<div class="">
														<div class="mb-1">
															<h5 class="mb-4 card-title">Short Answers</h5>
															<h4 class="h4">Q2. Enter your email</h4>
														</div>
													</div>
												</div>
											</div>
                                            <div class="card">
												<div class="card-body">
													<div class="">
														<div class="mb-1">
															<h5 class="mb-4 card-title">Long Answers</h5>
															<h4 class="h4">Q3. Enter your department</h4>
														</div>
													</div>
												</div>
											</div>
                                            <div class="card">
												<div class="card-body">
													<div class="">
														<div class="mb-1">
															<h5 class="mb-4 card-title">Long Answers</h5>
															<h4 class="h4">Q4. Subject and Course Code</h4>
														</div>
													</div>
												</div>
											</div>
                                            <div class="card">
												<div class="card-body">
													<div class="">
														<div class="mb-1 justify-content-center">
															<h4 class="mb-4 card-title">Multiple Answers</h4>
															<h4 class="h4">Q5. Overall Experience</h4>
                                                            <h4 class="h4">I. 5</h4> 
                                                            <h4 class="h4">II. 4</h4>
                                                            <h4 class="h4">III. 3</h4>
                                                            <h4 class="h4">IV. 2</h4>
                                                            <h4 class="h4">V. 1</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
			<?php
				include "footer.php";
			?>
		</div>
	</div>
	<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  	<script src="assets/js/main.js"></script>
	<script src="js/app.js"></script>
	<!-- <script>
		document.getElementById("profile1").style.display = "none";
		var id1 = document.getElementById("id1");
		var profile1 = document.getElementById("profile1")
		id1.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("list").style.display = "none";
		}
		id2.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("list").style.display = "none";
		}
		id3.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("list").style.display = "none";
		}
		id4.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("home").style.display = "none";
		}
		id5.onclick = function() {
			document.getElementById("profile1").style.display = "block";
			document.getElementById("home").style.display = "none";
		}
		function back(){
			document.getElementById("profile1").style.display = 'none';
			document.getElementById("home").style.display = "block";
		}
		function back1(){
			document.getElementById("profile1").style.display = 'none';
			document.getElementById("list").style.display = "block";
		}
	</script> -->
    <!-- <script>
        first1 = document.getElementById("home-tab");
        second1 = document.getElementById("list-tab");
        third1 = document.getElementById("list2-tab");
        first = document.getElementById("home");
        second = document.getElementById("profile");
        profile1 = document.getElementById("profile1");
        list = document.getElementById("list");
        third = document.getElementById("list1");
        const name = document.getElementById("name");
        // let b = ["b1","b2","b3","b4","b5","b6","b7","b8","b9"];
        // for (let i = 0; i < 3; i++) {
        //     b[i] = document.getElementById(b[i]);
        //     console.log(b[i]);
        // } 
        name.innerHTML = "First Year";

        first.style.display = "block";
        second.style.display = "none";
        third.style.display = "none";
        list.style.display = "none";
        profile1.style.display = "none";

        first.style.display = "block";
        second.style.display = "none";
        list.style.display = "none";
        name.innerHTML = "First Year | Bar Graph";
        b1.onclick = function() {
            first.style.display = "block";
            profile1.style.display = "none";
            list.style.display = "none";
            name.innerHTML = "First Year | Bar Graph";
        }
        b2.onclick = function() {
            first.style.display = "none";
            profile1.style.display = "block";
            list.style.display = "none";
            name.innerHTML = "First Year | Pie Graph";
        }
        b3.onclick = function() {
            first.style.display = "none";
            profile1.style.display = "none";
            list.style.display = "block";
            name.innerHTML = "First Year | List Form";
        }
        first1.onclick = function() {
            first.style.display = "block";
            second.style.display = "none";
            third.style.display = "none";
            profile1.style.display = "none";
            list.style.display = "none";
            name.innerHTML = "First Year | Bar Graph";
            b1.onclick = function() {
                first.style.display = "block";
                profile1.style.display = "none";
                list.style.display = "none";
                name.innerHTML = "First Year | Bar Graph";
            }
            b2.onclick = function() {
                first.style.display = "none";
                profile1.style.display = "block";
                list.style.display = "none";
                name.innerHTML = "First Year | Pie Graph";
            }
            b3.onclick = function() {
                first.style.display = "none";
                profile1.style.display = "none";
                list.style.display = "block";
                name.innerHTML = "First Year | List Form";
            }
        }

        second1.onclick = function() {
            first.style.display = "none";
            second.style.display = "block";
            third.style.display = "none";

            profile1.style.display = "none";
            list.style.display = "none";
            name.innerHTML = "Second Year | Bar Graph";
            b4.onclick = function() {
                second.style.display = "block";
                profile1.style.display = "none";
                list.style.display = "none";
                name.innerHTML = "Second Year | Bar Graph";
            }
            b5.onclick = function() {
                second.style.display = "none";
                profile1.style.display = "block";
                list.style.display = "none";
                name.innerHTML = "Second Year | Pie Graph";
            }
            b6.onclick = function() {
                second.style.display = "none";
                profile1.style.display = "none";
                list.style.display = "block";
                name.innerHTML = "Second Year | List Form";
            }
        }
        third1.onclick = function() {
            first.style.display = "none";
            second.style.display = "none";
            third.style.display = "block";

            profile1.style.display = "none";
            list.style.display = "none";

            name.innerHTML = "Third Year | Bar Graph";
            b7.onclick = function() {
                third.style.display = "block";
                profile1.style.display = "none";
                list.style.display = "none";
                name.innerHTML = "Third Year | Bar Graph";
            }
            b8.onclick = function() {
                third.style.display = "none";
                profile1.style.display = "block";
                list.style.display = "none";
                name.innerHTML = "Third Year | Pie Graph";
            }
            b9.onclick = function() {
                third.style.display = "none";
                profile1.style.display = "none";
                list.style.display = "block";
                name.innerHTML = "Third Year | List Form";
            }
        }
    </script> -->

	<script>
        first1 = document.getElementById("home-tab");
        second1 = document.getElementById("list-tab");
        third1 = document.getElementById("list2-tab");
        first = document.getElementById("home");
        second = document.getElementById("profile");
        third = document.getElementById("list1");
        profile2 = document.getElementById("profile2");
        const name = document.getElementById("name");
        // let b = ["b1","b2","b3","b4","b5","b6","b7","b8","b9"];
        // for (let i = 0; i < 3; i++) {
        //     b[i] = document.getElementById(b[i]);
        //     console.log(b[i]);
        // } 
        name.innerHTML = "First Year";

        first.style.display = "block";
        second.style.display = "none";
        third.style.display = "none";
        profile2.style.display = "none";

        name.innerHTML = "First Year";
        first1.onclick = function() {
            first.style.display = "block";
            second.style.display = "none";
            third.style.display = "none";
            profile2.style.display = "none";

            name.innerHTML = "First Year";
        }

        second1.onclick = function() {
            first.style.display = "none";
            second.style.display = "block";
            third.style.display = "none";
            profile2.style.display = "none";

            name.innerHTML = "Second Year";
        }
        third1.onclick = function() {
            first.style.display = "none";
            second.style.display = "none";
            third.style.display = "block";
            profile2.style.display = "none";

            name.innerHTML = "Third Year";
        }
        // profile2.onclick = function(){
        //     first.style.display = "none";
        //     second.style.display = "none";
        //     third.style.display = "block";
        //     profile2.style.display = "none";
        // }
        <?php
            for($i=2;$i<32;$i++){
                ?>
                id<?php echo $i; ?> = document.getElementById("<?php echo "id".$i; ?>");
                id<?php echo $i; ?>.onclick = function(){
                    profile2.style.display = "block";
                    first.style.display = "none";
                    second.style.display = "none";
                    third.style.display = "none";
                }
                <?php
            }
        ?>
        // function show1(){
        //     first.style.display = "block";
        //     second.style.display = "none";
        //     third.style.display = "none";

        //     list.style.display = "none";
        //     profile1.style.display = "none";
        //     profile2.style.display = "none";

        // }
        // function show2(){
        //     first.style.display = "none";
        //     second.style.display = "none";
        //     third.style.display = "none";

        //     list.style.display = "none";
        //     profile1.style.display = "none";
        //     profile2.style.display = "block";

        //     first.style.display = "block";
        //     second.style.display = "none";
        //     list.style.display = "none";
        // }
        // function show3(){
        //     first.style.display = "none";
        //     second.style.display = "none";
        //     third.style.display = "none";

        //     list.style.display = "block";
        //     profile1.style.display = "none";
        //     profile2.style.display = "none";

        //     first.style.display = "none";
        //     second.style.display = "none";
        // }
    </script>
</body>
</html>