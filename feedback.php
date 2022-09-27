<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link href="assets/img/logo.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style>
        @font-face {
            font-family: "San Francisco";
            font-weight: 400;
            src: url("./assets/css/SF-Pro-Display-Semibold.otf")
        }

        body {

            font-family: "San Francisco" !important;
            font-size: .875rem;
        }

        .main-question {
            border: 0px;
            padding: 0px;
            outline: none;
        }

        .main-question:focus {
            border-bottom: 2px solid #ccc;
            font-size: .999rem;

        }

        .slider-title:focus {
            border-bottom: 2px solid #ccc !important;
            font-size: .999rem;

        }

        ul {
            width: 100%;
            display: table;
            table-layout: fixed;
            /* optional, for equal spacing */
            border-collapse: collapse;
        }

        li {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }
    </style>
    <?php
    session_start();
    include 'imports/config.php';
    $form_id = $_GET['id'];
    $sqls = "select * from forms where form_id = '$form_id'";
    $result_forms = mysqli_query($conn, $sqls);
    if (!$result_forms) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $row_forms = mysqli_fetch_assoc($result_forms);
    $default_flag = $row_forms['default_ques'];
    $status = $row_forms['status'];

    if ($status == 0) {
        echo "<script>alert('This form is not active. Please contact the admin.')</script>";
        echo "<script>window.location.href='roles/student/index.php'</script>";
    }else{
        //echo "<script>alert('" . $_SESSION['uname'] . "')</script>";
        $sqlconfirm = "SELECT `student_id` from `form_responses` where `student_id` = '$_SESSION[uname]' and `form_id` = '$form_id'";
        $resultconfirm = mysqli_query($conn, $sqlconfirm);
        if (mysqli_num_rows($resultconfirm) > 0) {
            echo "<script>alert('You have already submitted the feedback for this form.')</script>";
            echo "<script>window.location.href='roles/student/index.php'</script>";
        }
    }

    if ($default_flag == 1){
        $sql = "select * from form_ques where form_id = '0'";
    }else{

        $sql = "SELECT * FROM form_ques WHERE form_id = '$form_id'";
    }
    $result = mysqli_query($conn, $sql);
    ?>
</head>

<body style="background-color: #f2f2f2">
    <div class="container my-5">
        <div class="middle" style="align-items: center; text-align:center;">
            <img src="./assets/img/logo.png" alt="" style="width: 100px">
        </div>

        <form action="./roles/student/submit_feedback.php" method="post">
            <!-- checkbox for personal details -->

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom  ">
                <div class="row">
                    <div class="col-md-12 my-1">
                        <h3 class="h2">
                            <?php

                            $ss = "select * from courses where course_code='$row_forms[course_code]'";
                            $result_courses = mysqli_query($conn, $ss);
                            if (!$result_courses) {
                                printf("Error: %s\n", mysqli_error($conn));
                                exit();
                            }
                            $row_courses = mysqli_fetch_assoc($result_courses);
                            echo $row_courses['course_name'] . " - " . $row_forms['course_code'];
                            ?>
                        </h3>
                    </div>
                    <div class="col-md-12">
                        <h6 class="h6">
                            <div class="blockquote-footer"><?php echo $row_forms["author"] ?></div>
                        </h6>
                    </div>
                </div>


            </div>
            <div class="card " style="background-color: #eaeaea; border:1px solid black">
                <div class="card-body">
                    <div class="container">
                        Note:
                        <br>
                        &nbsp&nbsp&nbsp&nbsp - Please fill the survey questions and ratings in the order of your preference.
                        <br>
                        &nbsp&nbsp&nbsp&nbsp - Extreme left indicates postive and extreme right indicates negative.
                        <br>
                        &nbsp&nbsp&nbsp&nbsp - If any difficulty is encountered, please contact your respective supervisor.

                    </div>

                </div>
            </div>


            <div id="allquestions">
                <?php
                $id = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row["type"] == "short") {
                ?>
                        <div class="question<?php echo $id ?>">

                            <div class="card my-2">
                                <div class="card-body">
                                    <h5 class="card-title"> <?php echo $id . ". " . $row["question_title"] ?></h5>
                                    <input type="text" name="shortans<?php echo $id ?>" class="form-control" placeholder="Enter Answer in Short" id="shortans<?php echo $id ?>">

                                </div>

                            </div>
                        </div>
                    <?php
                    } elseif ($row["type"] == "long") {
                    ?>
                        <div class="question<?php echo $id ?>">
                            <div class="card my-2">
                                <div class="card-body">
                                    <h5 class="card-title"> <?php echo $id . ". " . $row["question_title"] ?></h5>

                                    <textarea name="longans<?php echo $id ?>" class="form-control" id="longans<?php echo $id ?>" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    <?php
                    } elseif ($row["type"] == "slider") {
                    ?>
                        <div class="question<?php echo $id ?>">

                            <div class="card my-2">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $row["question_title"] ?> </h5>

                                    <ul>
                                        <li style="text-align:left; align-items:left;">Poor </li>
                                        <li style="padding-left:4%;text-align:left; align-items:left;">Needs Improvement</li>
                                        <li style="text-align:center; align-items:center;">Satisfactory </li>
                                        <li style="text-align:right;padding-right:4%; align-items:right;">Good</li>
                                        <li style="text-align:right; align-items:right;">Excellent</li>
                                    </ul>
                                    <?php
                                    for ($i = 1; $i <= count(json_decode($row["sub_content"])); $i++) {

                                    ?>
                                        <div class="sliders<?php echo $i ?>">
                                            <p class="slider-title form-label">
                                                <?php echo json_decode($row["sub_content"])[$i - 1] ?>
                                            </p>


                                            <div class="range">
                                                <input type="range" class="form-range" id="slider-<?php echo $id ?>" name="slider-<?php echo $id ?>" min="1" max="100" />
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>

                            </div>
                        </div>
                <?php
                    }
                    $id++;
                }

                ?>
            </div>
            <br>


            <input type="hidden" name="form_id" value="<?php echo $_GET["id"] ?>">
            <input type="submit" class="btn  btn-dark" value="Submit">
            </form>


    </div>
    <script>
        var textarea = document.getElementById("textarea");
        var heightLimit = 200;

        textarea.oninput = function() {
            textarea.style.height = "";
            textarea.style.height = Math.min(textarea.scrollHeight, heightLimit) + "px";
        };
    </script>
    <script>
        var index = 0;
        $(document).ready(function() {
            $("#shortans").click(function() {
                index++;
                $.get("./genform.php", {
                    'id': index,
                    'type': "shortans"
                }, function(data) {
                    $("#allquestions").append(data);
                })

            });
            $("#longans").click(function() {
                index++;
                $.get("./genform.php", {
                    'id': index,
                    'type': "longans"
                }, function(data) {
                    $("#allquestions").append(data);
                })

            });
            $("#mcqans").click(function() {
                index++;
                $.get("./genform.php", {
                    'id': index,
                    'type': "mcqans"
                }, function(data) {
                    $("#allquestions").append(data);
                })

            });
            $("#sliderans").click(function() {
                index++;
                $.get("./genform.php", {
                    'id': index,
                    'type': "sliderans"
                }, function(data) {
                    $("#allquestions").append(data);
                })

            });
            $("#addform").click(function() {
                var formtype = $("#formtype").val();
                var quantity = $("#quantity").val();
                var questions = $("#questions").val();
                for (let i = 0; i < quantity; i++) {
                    index++;
                    $.get("./genform.php", {
                        'id': index,
                        'type': formtype,
                        'questions': questions
                    }, function(data) {
                        $("#allquestions").append(data);
                    })
                }


            });
        });
    </script>
    <script>
        document.getElementById("personalcheck").addEventListener("click", function() {
            if (this.checked) {
                document.getElementById("personal").style.display = "block";
            } else {
                document.getElementById("personal").style.display = "none";
            }
        });
    </script>
</body>

</html>