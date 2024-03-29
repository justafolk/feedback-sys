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
    <link rel="shortcut icon" href="../../assets/img/logo.png" />

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
    <div class="wrapper">
        <?php
        session_start();
        include 'confirm.php';
        include 'sidebar.php';
        include '../../imports/config.php';
        //error_reporting(0);

        $deptcode = $_GET['deptcode'];
        $sqlhead = "SELECT dept_name FROM departments WHERE dept_id = '$deptcode'";
        $resulthead = mysqli_query($conn, $sqlhead);
        $rowhead = mysqli_fetch_assoc($resulthead);
        $deptname = $rowhead['dept_name'];
        ?>
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <div>
                    <h1 class="h3 mb-0"><strong>Past forms | <?php echo "$deptname"; ?> </strong></h1>
                </div>
                <?php
                function ordinal($a) {
                    // return English ordinal number
                    return $a.substr(date('jS', mktime(0,0,0,1,($a%10==0?9:($a%100>20?$a%10:$a%100)),2000)),-2);
                  }
                include "notification.php";
                ?>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                     <div class="mb-3">
                        <h1 class="h3 d-inline align-middle" >View by Acadmic Year</h1>
                    </div>
                    <?php 
                        $sql = "select DISTINCT academic_year from forms";
                        $result = mysqli_query($conn, $sql);
                        while ($row=mysqli_fetch_assoc($result)){                        
                            ?>
                            <button class="btn btn-primary me-3" onclick="window.location.href='./final_print_report.php?academic_year=<?php echo $row['academic_year'] ?>&dept=<?php echo $deptcode ?>'" ><?php echo $row["academic_year"] ?> </button>
                        <?php
                        }
                    ?>
                    <br>
                    <br>
                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle" >View by Semester</h1>
                    </div>
                    <?php 
                        for ($i=1; $i < 7 ; $i++) { 
                            ?>
                            <button class="btn btn-primary me-3" onclick="window.location.href='./final_print_report.php?semester=<?php echo $i ?>&dept=<?php echo $deptcode ?>'" ><?php echo ordinal($i) ?> Semester</button>
                        <?php
                        }
                    ?>
                    <br>
                    <br>

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle" id="name">Computer Department</h1>
                    </div>
                    <button class="btn btn-primary me-3" id="home-tab">1st Year</button>
                    <button class="btn btn-primary me-3" id="list-tab">2nd Year</button>
                    <button class="btn btn-primary me-3" id="list2-tab">3rd Year</button>
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
                                                                <th scope="col">View</th>
                                                                <th scope="col">Reschedule</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include "../../imports/config.php";
                                                            ?>
                                                            <form method="post" action="">
                                                                <?php
                                                                $i = 1;
                                                                $sql = "SELECT * from `forms` WHERE dept_code = '$deptcode' AND semester = '1' AND `viewed`='1'";
                                                                $result = mysqli_query($conn, $sql);

                                                                while ($row = mysqli_fetch_assoc($result)) {

                                                                    $data = "select * from `courses` where course_code = '" . $row['course_code'] . "'";
                                                                    $subject = mysqli_query($conn, $data);
                                                                    $row2 = mysqli_fetch_assoc($subject);
                                                                    $subject = $row2['course_name'];

                                                                    $course_code = $row['course_code'];
                                                                    $teacher_name = $row['author'];
                                                                    $date = $row['ini_date'];

                                                                    $todays_date = date("Y-m-d");

                                                                    if ($todays_date > $date) {
                                                                        $status = "<span class='badge bg-danger'>Expired</span>";
                                                                    } elseif ($todays_date == $date) {
                                                                        $sql3 = "UPDATE `forms` SET status = '1' WHERE course_code = '$course_code' AND author = '$teacher_name' AND ini_date = '$date'";
                                                                        $result3 = mysqli_query($conn, $sql3);

                                                                        $status = "<span class='badge bg-success'>Active</span>";
                                                                    } else {
                                                                        $status = "<span class='badge bg-warning'>Pending</span>";
                                                                    }


                                                                    $fid = $row['form_id'];

                                                                    echo "<tr>
                                                                                <th scope='row'>$i</th>
                                                                                <td>$subject</td>
                                                                                <td>$course_code</td>
                                                                                <td>$teacher_name</td>
                                                                                <td>$date</td>
                                                                                <td>$status</td>
                                                                            <td><a href='report.php?id=$fid' class='btn btn-primary'>View</a></td>
                                                                            <td><a href='reschedule.php?id=$fid' class='btn btn-primary'>Edit</a></td>
                                                                            </tr>";
                                                                    $i++;
                                                                }

                                                                ?>
                                                            </form>

                                                            <!-- <td><input class=\"btn btn-success\" type=\"submit\" name='id $fid' value=\"Active\"> <input class=\"btn btn-danger\" type=\"submit\" name=\"id $fid\" value=\"Inactive\"> </td> -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <div class="mb-1">
                                                    <h5 class="mb-4 card-title">Summer Seasons | 2nd Semester</h5>
                                                    <table class="table text-center">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Sr. No</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Course Code</th>
                                                                <th scope="col">Teacher Name</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Status</th>

                                                                <th scope="col">View</th>
                                                                <th scope="col">Reschedule</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include "../../imports/config.php";
                                                            ?>
                                                            <form method="post" action="">
                                                                <?php
                                                                $i = 1;
                                                                $sql = "SELECT * from `forms` WHERE dept_code = '$deptcode' AND semester = '2' AND `viewed`='1'";
                                                                $result = mysqli_query($conn, $sql);

                                                                while ($row = mysqli_fetch_assoc($result)) {

                                                                    $data = "select * from `courses` where course_code = '" . $row['course_code'] . "'";
                                                                    $subject = mysqli_query($conn, $data);
                                                                    $row2 = mysqli_fetch_assoc($subject);
                                                                    $subject = $row2['course_name'];

                                                                    $course_code = $row['course_code'];
                                                                    $teacher_name = $row['author'];
                                                                    $date = $row['ini_date'];

                                                                    $todays_date = date("Y-m-d");

                                                                    if ($todays_date > $date) {
                                                                        $status = "<span class='badge bg-danger'>Expired</span>";
                                                                    } elseif ($todays_date == $date) {
                                                                        $sql3 = "UPDATE `forms` SET status = '1' WHERE course_code = '$course_code' AND author = '$teacher_name' AND ini_date = '$date'";
                                                                        $result3 = mysqli_query($conn, $sql3);

                                                                        $status = "<span class='badge bg-success'>Active</span>";
                                                                    } else {
                                                                        $status = "<span class='badge bg-warning'>Pending</span>";
                                                                    }


                                                                    $fid = $row['form_id'];

                                                                    echo "<tr>
                                                                                <th scope='row'>$i</th>
                                                                                <td>$subject</td>
                                                                                <td>$course_code</td>
                                                                                <td>$teacher_name</td>
                                                                                <td>$date</td>
                                                                                <td>$status</td>
                                                                            <td><a href='report.php?id=$fid' class='btn btn-primary'>View</a></td>
                                                                            <td><a href='reschedule.php?id=$fid' class='btn btn-primary'>Edit</a></td>
                                                                            </tr>";
                                                                    $i++;
                                                                }

                                                                ?>
                                                            </form>
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
                                                    <h5 class="mb-4 card-title">Winter Seasons | 3rd Semester</h5>
                                                    <table class="table text-center">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Sr. No</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Course Code</th>
                                                                <th scope="col">Teacher Name</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Status</th>

                                                                <th scope="col">View</th>
                                                                <th scope="col">Reschedule</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include "../../imports/config.php";
                                                            ?>
                                                            <form method="post" action="">
                                                                <?php
                                                                $i = 1;
                                                                $sql = "SELECT * from `forms` WHERE dept_code = '$deptcode' AND semester = '3' AND `viewed`='1'";
                                                                $result = mysqli_query($conn, $sql);

                                                                while ($row = mysqli_fetch_assoc($result)) {

                                                                    $data = "select * from `courses` where course_code = '" . $row['course_code'] . "'";
                                                                    $subject = mysqli_query($conn, $data);
                                                                    $row2 = mysqli_fetch_assoc($subject);
                                                                    $subject = $row2['course_name'];

                                                                    $course_code = $row['course_code'];
                                                                    $teacher_name = $row['author'];
                                                                    $date = $row['ini_date'];

                                                                    $todays_date = date("Y-m-d");

                                                                    if ($todays_date > $date) {
                                                                        $status = "<span class='badge bg-danger'>Expired</span>";
                                                                    } elseif ($todays_date == $date) {
                                                                        $sql3 = "UPDATE `forms` SET status = '1' WHERE course_code = '$course_code' AND author = '$teacher_name' AND ini_date = '$date'";
                                                                        $result3 = mysqli_query($conn, $sql3);

                                                                        $status = "<span class='badge bg-success'>Active</span>";
                                                                    } else {
                                                                        $status = "<span class='badge bg-warning'>Pending</span>";
                                                                    }


                                                                    $fid = $row['form_id'];

                                                                    echo "<tr>
                                                                                <th scope='row'>$i</th>
                                                                                <td>$subject</td>
                                                                                <td>$course_code</td>
                                                                                <td>$teacher_name</td>
                                                                                <td>$date</td>
                                                                                <td>$status</td>
                                                                            <td><a href='report.php?id=$fid' class='btn btn-primary'>View</a></td>
                                                                            <td><a href='reschedule.php?id=$fid' class='btn btn-primary'>Edit</a></td>
                                                                            </tr>";
                                                                    $i++;
                                                                }

                                                                ?>
                                                            </form>
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
                                                    <h5 class="mb-4 card-title">Summer Seasons | 4th Semester</h5>
                                                    <table class="table text-center">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Sr. No</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Course Code</th>
                                                                <th scope="col">Teacher Name</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Status</th>

                                                                <th scope="col">View</th>
                                                                <th scope="col">Reschedule</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include "../../imports/config.php";
                                                            ?>
                                                            <form method="post" action="">
                                                                <?php
                                                                $i = 1;
                                                                $sql = "SELECT * from `forms` WHERE dept_code = '$deptcode' AND semester = '4' AND `viewed`='1'";
                                                                $result = mysqli_query($conn, $sql);

                                                                while ($row = mysqli_fetch_assoc($result)) {

                                                                    $data = "select * from `courses` where course_code = '" . $row['course_code'] . "'";
                                                                    $subject = mysqli_query($conn, $data);
                                                                    $row2 = mysqli_fetch_assoc($subject);
                                                                    $subject = $row2['course_name'];

                                                                    $course_code = $row['course_code'];
                                                                    $teacher_name = $row['author'];
                                                                    $date = $row['ini_date'];

                                                                    $todays_date = date("Y-m-d");

                                                                    if ($todays_date > $date) {
                                                                        $status = "<span class='badge bg-danger'>Expired</span>";
                                                                    } elseif ($todays_date == $date) {
                                                                        $sql3 = "UPDATE `forms` SET status = '1' WHERE course_code = '$course_code' AND author = '$teacher_name' AND ini_date = '$date'";
                                                                        $result3 = mysqli_query($conn, $sql3);

                                                                        $status = "<span class='badge bg-success'>Active</span>";
                                                                    } else {
                                                                        $status = "<span class='badge bg-warning'>Pending</span>";
                                                                    }


                                                                    $fid = $row['form_id'];

                                                                    echo "<tr>
                                                                                <th scope='row'>$i</th>
                                                                                <td>$subject</td>
                                                                                <td>$course_code</td>
                                                                                <td>$teacher_name</td>
                                                                                <td>$date</td>
                                                                                <td>$status</td>
                                                                            <td><a href='report.php?id=$fid' class='btn btn-primary'>View</a></td>
                                                                            <td><a href='reschedule.php?id=$fid' class='btn btn-primary'>Edit</a></td>
                                                                            </tr>";
                                                                    $i++;
                                                                }

                                                                ?>
                                                            </form>
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
                                                    <h5 class="mb-4 card-title">Winter Seasons | 5th Semester</h5>
                                                    <table class="table text-center">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Sr. No</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Course Code</th>
                                                                <th scope="col">Teacher Name</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Status</th>

                                                                <th scope="col">View</th>
                                                                <th scope="col">Reschedule</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include "../../imports/config.php";
                                                            ?>
                                                            <form method="post" action="">
                                                                <?php
                                                                $i = 1;
                                                                $sql = "SELECT * from `forms` WHERE dept_code = '$deptcode' AND semester = '5' AND `viewed`='1'";
                                                                $result = mysqli_query($conn, $sql);

                                                                while ($row = mysqli_fetch_assoc($result)) {

                                                                    $data = "select * from `courses` where course_code = '" . $row['course_code'] . "'";
                                                                    $subject = mysqli_query($conn, $data);
                                                                    $row2 = mysqli_fetch_assoc($subject);
                                                                    $subject = $row2['course_name'];

                                                                    $course_code = $row['course_code'];
                                                                    $teacher_name = $row['author'];
                                                                    $date = $row['ini_date'];

                                                                    $todays_date = date("Y-m-d");

                                                                    if ($todays_date > $date) {
                                                                        $status = "<span class='badge bg-danger'>Expired</span>";
                                                                    } elseif ($todays_date == $date) {
                                                                        $sql3 = "UPDATE `forms` SET status = '1' WHERE course_code = '$course_code' AND author = '$teacher_name' AND ini_date = '$date'";
                                                                        $result3 = mysqli_query($conn, $sql3);

                                                                        $status = "<span class='badge bg-success'>Active</span>";
                                                                    } else {
                                                                        $status = "<span class='badge bg-warning'>Pending</span>";
                                                                    }


                                                                    $fid = $row['form_id'];

                                                                    echo "<tr>
                                                                                <th scope='row'>$i</th>
                                                                                <td>$subject</td>
                                                                                <td>$course_code</td>
                                                                                <td>$teacher_name</td>
                                                                                <td>$date</td>
                                                                                <td>$status</td>
                                                                            <td><a href='report.php?id=$fid' class='btn btn-primary'>View</a></td>
                                                                            <td><a href='reschedule.php?id=$fid' class='btn btn-primary'>Edit</a></td>

                                                                            </tr>";
                                                                    $i++;
                                                                }

                                                                ?>
                                                            </form>
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
                                                    <h5 class="mb-4 card-title">Summer Seasons | 6th Semester</h5>
                                                    <table class="table text-center">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th scope="col">Sr. No</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Course Code</th>
                                                                <th scope="col">Teacher Name</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">View</th>
                                                                <th scope="col">Reschedule</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include "../../imports/config.php";
                                                            ?>
                                                            <form method="post" action="">
                                                                <?php
                                                                $i = 1;
                                                                $sql = "SELECT * from `forms` WHERE dept_code = '$deptcode' AND semester = '6' AND `viewed`='1'";
                                                                $result = mysqli_query($conn, $sql);

                                                                while ($row = mysqli_fetch_assoc($result)) {

                                                                    $data = "select * from `courses` where course_code = '" . $row['course_code'] . "'";
                                                                    $subject = mysqli_query($conn, $data);
                                                                    $row2 = mysqli_fetch_assoc($subject);
                                                                    $subject = $row2['course_name'];

                                                                    $course_code = $row['course_code'];
                                                                    $teacher_name = $row['author'];
                                                                    $date = $row['ini_date'];

                                                                    $todays_date = date("Y-m-d");

                                                                    if ($todays_date > $date) {
                                                                        $status = "<span class='badge bg-danger'>Expired</span>";
                                                                    } elseif ($todays_date == $date) {
                                                                        $sql3 = "UPDATE `forms` SET status = '1' WHERE course_code = '$course_code' AND author = '$teacher_name' AND ini_date = '$date'";
                                                                        $result3 = mysqli_query($conn, $sql3);

                                                                        $status = "<span class='badge bg-success'>Active</span>";
                                                                    } else {
                                                                        $status = "<span class='badge bg-warning'>Pending</span>";
                                                                    }


                                                                    $fid = $row['form_id'];

                                                                    echo "<tr>
                                                                                <th scope='row'>$i</th>
                                                                                <td>$subject</td>
                                                                                <td>$course_code</td>
                                                                                <td>$teacher_name</td>
                                                                                <td>$date</td>
                                                                                <td>$status</td>
                                                                            <td><a href='report.php?id=$fid' class='btn btn-primary'>View</a></td>
                                                                            <td><a href='reschedule.php?id=$fid' class='btn btn-primary'>Edit</a></td>
                                                                            </tr>";
                                                                    $i++;
                                                                }

                                                                ?>
                                                            </form>
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
        for ($i = 2; $i < 32; $i++) {
        ?>
            id<?php echo $i; ?> = document.getElementById("<?php echo "id" . $i; ?>");
            id<?php echo $i; ?>.onclick = function() {
                profile2.style.display = "block";
                first.style.display = "none";
                second.style.display = "none";
                third.style.display = "none";
            }
        <?php
        }
        ?>
    </script>
</body>

</html>


<?php
/*
if(isset($_POST['id'])){
    $id = $_POST['id'];

    echo "<script>alert('".$id."');</script>";
   
    $sql = "UPDATE `forms` SET `status` = '1' WHERE `forms`.`form_id` = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Status Changed Successfully!')</script>";
        echo "<script>window.location.href = 'forms.php'</script>";
    }else{
        echo "<script>alert('Status Not Changed!')</script>";
        echo "<script>window.location.href = 'forms.php'</script>";
    } 
}
*/
?>
