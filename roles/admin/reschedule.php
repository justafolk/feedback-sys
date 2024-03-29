<!DOCTYPE html>
<html lang="en">
<?php

session_start();
require "../../imports/config.php";
//include 'imports/config.php';
error_reporting(0);

if ($_SESSION['role'] != 'Admin') {
    echo "<script>alert('Invalid Session, please login again');</script>";
    echo "<script>window.location.href='../../index.php';</script>";
}
$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "feedback";

$conn = mysqli_connect($server, $user, $passwd, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../../assets/img/logo.png">
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Create student group</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <style>
        group {
            display: flex;
        }

        input[type=checkbox] {
            opacity: 0;
            width: 100%;
            height: 0px;
            background-color: green;
            position: relative;
            z-index: 1;
        }

        .input-container {
            margin: 2px 2px 2px 2px;

            width: 75px;
            height: 42px;
        }

        .input-container label {
            position: absolute;
            margin: 10px 10px 10px 10px;

            top: 0;
            left: 0;
            color: #737373;
            width: 76px;
            line-height: 42px;
            text-align: center;
            position: relative;
        }

        input:checked+label {
            background-color: #D9F8C4;
            border: 1px solid green;

            top: 0;
            left: 0;
            z-index: 2;
            color: black;
        }

        input:not(:checked)+label {
            background-color: #F37878;
            top: 0;
            left: 0;
            z-index: 2;
            color: white;
        }

        .atrangi {
            display: block;
            overflow-x: auto;
        }
    </style>
</head>
<style>
    .eventClass a {
        background-color: #dda919 !important;
        color: #FFF !important;
    }
</style>

<body>
    <div class="wrapper">
        <?php
        require 'sidebar.php';
        ?>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <div>
                    <h1 class="h3 mb-0"><strong>Updating Feedback</strong></h1>
                </div>

                <?php
                require 'notification.php';
                $feedback_id = $_GET['id'];
                ?>
            </nav>


            <main class="content">
                <div class="container-fluid p-0">
                    <div class="row">
                        <h1 class="h3 mb-3"><strong>Update</strong> Student group</h1>
                        <div class="card border">
                            <div class="card-body">
                                <form action="" method="POST">

                                    <div class="form-group">
                                        <!-- select department -->
                                        <div class="row">
                                            <div class=col-md-4>
                                                <?php 
                                                $sql = "select * from departments where `dept_id` in (select `deptcode` from `groups` where `id` = '$feedback_id')";
                                                $result = mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                $name = $row['dept_name'];
                                                
                                                ?>
                                                <label for="department"><b>Department</b></label>
                                                <input type="text" class="form-control" id="department" name="department" value="<?php echo $name; ?>" readonly>

                                          
                                            </div>
                                            <!-- select semester -->
                                            <div class=col-md-4>
                                                <label for="semester"><b>Semester</b></label>
                                                <?php
                                                    $sqlsem = "select * from `groups` where `id` = '$feedback_id'";
                                                    $resultsem = mysqli_query($conn, $sqlsem);
                                                    $rowsem = mysqli_fetch_assoc($resultsem);
                                                    $semester = $rowsem['semester'];

                                                    if($semester == 1){
                                                        $semester = "1st Semester";
                                                    }elseif($semester == 2){
                                                        $semester = "2nd Semester";
                                                    }elseif($semester == 3){
                                                        $semester = "3rd Semester";
                                                    }elseif($semester == 4){
                                                        $semester = "4th Semester";
                                                    }elseif($semester == 5){
                                                        $semester = "5th Semester";
                                                    }elseif($semester == 6){
                                                        $semester = "6th Semester";
                                                    }else{
                                                        $semester = '<i>Not Available</i>';
                                                    }
                                                ?>

                                                <input type="text" class="form-control" id="semester" name="semester" value="<?php echo $semester; ?>" readonly>
                                                
                                            </div>

                                            <div class=col-md-4>
                                                <label for="semester"><b>Subject</b></label>
                                                <?php
                                                    $sqlsub = "select * from `groups` where `id` = '$feedback_id'";
                                                    $resultsub = mysqli_query($conn, $sqlsub);
                                                    $rowsub = mysqli_fetch_assoc($resultsub);
                                                    $subjectcode = $rowsub['subject'];
                                                    
                                                    $sqlsubname = "select * from `courses` where `course_code` = '$subjectcode'";
                                                    $resultsubname = mysqli_query($conn, $sqlsubname);
                                                    $rowsubname = mysqli_fetch_assoc($resultsubname);
                                                    $subjectname = $rowsubname['course_name'];

                                                ?>
                                                <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $subjectcode." - ".$subjectname; ?>" readonly>
                                            </div>

                                        </div>
                                        <br />

                                        <!--
                                        <label for="department">Select Department</label>
                                        <select class="form-control" id="department" name="department">
                                            <option value="">Select Department</option>
                                            <option value="10">Civil Engineering (Aided)</option>
                                            <option value="20">Mechanical Engineering (Aided)</option>
                                            <option value="21">Mechanical Engineering (Un-Aided)</option>
                                            <option value="30">Electrical Engineering</option>
                                            <option value="40">Computer Engineering</option>
                                            <option value="50">Electronics And Telecommuncation (Aided)</option>
                                            <option value="51">Electronics And Telecommuncation (Un-Aided)</option>
                                        </select> -->
                                    </div>


                                    <div class="form-group">
                                        <div class="row">
                                            <div class=col-md-4>
                                                <label for="name">Additional Roll numbers - Delimeter is ; (semicolon)</label>
                                                <input type="text" value="<?php echo $_POST["addrollunit"] ?>" class="form-control" id="name" name="addrollunit" placeholder="split with ';'">
                                            </div>
                                            <div class=col-md-4>
                                                <label for="date">Date</label>
                                                <input type="date" value="<?php echo $_POST["date"] ?>" class="form-control" id="date" name="date" required>
                                            </div>
                                        </div>

                                        <br />
                                        <br />

                                        <center> <button type="submit" class="btn btn-primary" name="checkroll">Summarise updates</submit>
                                        </center>
                                    </div>



                                    <div class="form-group">


                                        <h3><label for="exampleInputPassword1"><b>Final student survey group </b></label></h3>
                                        <!-- required red mark-->

                                        <div class="form-group atrangi">
                                            <?php

                                            if (isset($_POST['checkroll']) or isset($_POST['finalroll'])) {
                                            ?>
                                                
                                                <br>
                                                <span class="badge bg-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span>

                                                <b>Green checkbox indicates student is in the course group.</b>
                                                <br>

                                                <span class="badge bg-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </span>
                                                <b>Red checkbox indicates student is not in the course group.</b>
                                                <br>
                                                <br>
                                                <span style="color:red;">*</span> <b> Click on the roll number to add/remove student from group.</b>
                                                <br>

                                            <?php
                                            /*
                                                $sqlopop = "select * from `forms` where `form_id` = '$feedback_id'";
                                                $resultopop = mysqli_query($conn, $sqlopop);
                                                $rowopop = mysqli_fetch_assoc($resultopop);
                                                
                                                $deptcode = $rowopop['deptcode'];
                                                $semester = $rowopop['semester'];
                                                $subject = $rowopop['course_code'];
                                                //$rollrange = $_POST['rollrange'];
                                                //$grpid = $rowopop['group_id'];
                                                $sqlgrpid = "select * from `groups` where `id` = '$feedback_id'";
                                                $resultgrpid = mysqli_query($conn, $sqlgrpid);
                                                $rowgrpid = mysqli_fetch_assoc($resultgrpid);
                                                $rollrange = $rowgrpid['activeRoll'];
                                                //echo "<script>alert('$rollrange')</script>"; */

                                                /*
                                                if ($additionalroll = $_POST['addrollrange']) {
                                                    $additionalroll = explode('-', $additionalroll);
                                                } else {
                                                    $additionalroll = "-";
                                                } 

                                                $additionalstart = $additionalroll[0];
                                                $additionalend = $additionalroll[1];
                                                $additionalyear = $additionalstart[0] . $additionalstart[1];

                                                $addstart = explode($deptcode, $additionalstart);
                                                $addstart = $addstart[1];

                                                $addend = explode($deptcode, $additionalend);
                                                $addend = $addend[1];


                                                $start = $rollrange[0];
                                                $end = $rollrange[1];
                                                $year = $start[0] . $start[1];

                                                $rollstart = explode($deptcode, $start);
                                                $rollstart = $rollstart[1];

                                                $rollend = explode($deptcode, $end);
                                                $rollend = $rollend[1];
                                                $count = $rollstart;

                                                $active_roll = array();

                                                //current year
                                                for ($i = $rollstart; $i <= $rollend; $i++) {
                                                    $i = sprintf("%02d", $i);
                                                    $active_roll[] = $year . $deptcode . $i;
                                                }
                                                //new year
                                                for ($i = $addstart; $i <= $addend; $i++) {
                                                    $i = sprintf("%02d", $i);
                                                    $active_roll[] = $additionalyear . $deptcode . $i;
                                                } */
                                                $addroll = $_POST['addrollunit'];
                                                $addroll = explode(';', $addroll);
                                                $active_roll = array();
                                                foreach ($addroll as $roll) {
                                                    $active_roll[] = $roll;
                                                }
                                                $active_roll = array_unique($active_roll);
                                                $active_roll = json_encode($active_roll);
                                                //echo "<script>alert('$active_roll')</script>";

//                                                echo "script>alert('$_POST[addrollunit]')</script>";
  //                                              $active_roll = array();# json_decode($rollrange);

                                                /*foreach (explode(";", $_POST["addrollunit"]) as $key => $value) {
                                                    $active_roll[] = $value;
                                                }
                                                
                                                $active_roll = array_diff($active_roll, [-4000, "", " "]);*/
                                                /*
                                                $inactive_op = [];
                                                for ($i = 0; $i < count($active_roll); $i++) {
                                                    $sqltocheck = "select * from `form_responses` where `student_id` = '$active_roll[$i]'";
                                                    $resulttocheck = mysqli_query($conn, $sqltocheck);
                                                    //$rowtocheck = mysqli_fetch_assoc($resulttocheck);
                                                    $tochecknum = mysqli_num_rows($resulttocheck);
                                                    if ($tochecknum == 0) {
                                                        $inactive_op = array_merge($inactive_op, [$active_roll[$i]]);
                                                    } 
                                                    
                                                
                                                }*/
                                                //$inactive_op = json_encode($inactive_op);
                                                //echo "<script>alert('$active_op')</script>";
                                                $active_op = json_decode($active_roll);
                                                $allrolls = count($active_op);
                                                //$allrolls = array_unique($inactive_op);
                                                echo "<p class=\' my-0 \' >Total number of students: <strong>" . $allrolls . "</strong>  </p>";
                                                $count = 1;

                                                while ($count <= $allrolls) {
                                                    echo "<group>";
                                                    for ($i = 1; $i < 16; $i++) {

                                                        $row["enrollid"] = $active_op[$count - 1];
                                                        $count += 1;
                                                        
                                                        if ($row['enrollid'] == 0) {
                                                            continue;
                                                        }
                                                        error_reporting(0);
                                                        //array_push($rolls, $row['enrollid']);
                                                        echo  "<input  type=\"hidden\" name=\"{$row['enrollid']}\" id=\"{$row['enrollid']}no\" value='0'>";

                                                        echo  "<div class=\"input-container\"/>
															
                                                            <input checked type=\"checkbox\" value='1' name=\"{$row['enrollid']}\" id=\"{$row['enrollid']}\" margin=10px  >
                                                            <label for=\"{$row['enrollid']}\">{$row['enrollid']}</label>
                                                            </div>";
                                                        }

                                                    
                                                    echo "</group>";
                                                }
                                            }
                                            ?>

                                        </div>
                                        <br />
                                        <br />
                                        <center><button submit class="btn btn-primary" name="finalroll">Finalise update</submit>
                                        </center>
                                    </div>
                            </div>

                            <br />
                            </form>
                        </div>
                    </div>
                </div>


                <div class="row">




                </div>

            </main>


        </div>
    </div>

    <script src="js/app.js"></script>


    <?php
    include '../../imports/config.php';
    if (isset($_POST['finalroll'])) {

        $new_roll = json_decode($active_roll);
        $new_roll = array_diff($new_roll, [-4000, "", " "]);
        $new_roll = array_unique($new_roll);
        

//        echo "<script>alert('$new_roll')</script>";

        

        /*
        $known_posts = array('deptcode', 'semester', 'subject', 'rollrange','addrollunit', 'date', 'department', 'finalroll');
        $active_rolls = array();
        $remove_rolls = array();
        foreach ($_POST as $key => $value) {
            if (!in_array($key, $known_posts)) {
                if ($value == "0") {
                    $remove_rolls[] = $key;
                } else {
                    array_push($active_rolls, $key);
                }
            }
        }
        var_dump($remove_rolls);
        $active_rolls = json_encode($active_rolls);
       // echo "<script>alert('$active_rolls')</script>";
        $feedback_id = $_GET['id'];
        //echo "<script>alert('$feedback_id')</script>";
*/
        
        $sqlfinal = "SELECT * from groups where id = '$feedback_id'";
        $resultfinal = mysqli_query($conn, $sqlfinal);
        $rowfinal = mysqli_fetch_assoc($resultfinal);
        $deptcode = $rowfinal['deptcode'];
        $rollrange = $rowfinal['activeRoll'];
       
        
        $final = array();
        $active_rolls = $new_roll; #json_decode($active_rolls);
        $rollrange = json_decode($rollrange);

        for ($i = 0; $i < count($rollrange); $i++) {
            if(!in_array($rollrange[$i], $active_rolls)){
                $final[] = $rollrange[$i];
            }
        }

        $uniqueig = array();
        foreach (explode(";", $_POST["addrollunit"]) as $key => $value) {
            $uniqueig[] = $value;
        }
        //$uniqueig = array_diff($uniqueig, [-4000, "", " "]);
        //$uniqueig = array_unique($uniqueig);
        //$uniqueig = json_encode($uniqueig);
        //echo "<script>alert('$uniqueig')</script>";

        $final = array_merge($final, $active_rolls);
        $final_count = count($final);
        //echo "<script>alert('$final_count')</script>";
        $final = json_encode($final);
        //echo "<script>alert('$final')</script>";
        
        $date = $_POST['date']; 
        
        
        $sql = "UPDATE groups SET activeRoll = '$final', student_count='$final_count', fdate='$date' WHERE id = '$feedback_id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $opop = json_decode($final);
            for ($i = 0; $i < count($opop); $i++) {
                $sqlcheckkk = "SELECT * from login where uname = '$opop[$i]'";
                $resultcheckkk = mysqli_query($conn, $sqlcheckkk);
                $towcheckkknum = mysqli_num_rows($resultcheckkk);
                if ($towcheckkknum == 0) {
                    $passwdx = md5($opop[$i]);
                    $sqlinsert = "INSERT INTO login (uname, passwd, role, name, flog, student_groups) VALUES ('$opop[$i]', '$passwdx', 'Student', 'student', '1', ';$feedback_id;')";
                    $resultinsert = mysqli_query($conn, $sqlinsert);
                }
            }
            $sqlupdate = "UPDATE forms SET total_students = '$final_count', ini_date='$date', viewed='0' WHERE form_id = '$feedback_id'";
            $resultupdate = mysqli_query($conn, $sqlupdate);

            for ($i = 0; $i < count($uniqueig); $i++) {
                $sqlupdate = "UPDATE login SET student_groups = CONCAT(student_groups, '$feedback_id;') WHERE uname = '$uniqueig[$i]'";
                $resultupdate = mysqli_query($conn, $sqlupdate);
            }

            echo "<script>alert('Date and roll numbers updated successfully')</script>";
            echo "<script>window.location.href = 'view_form.php?deptcode=$deptcode'</script>";
        } else {
            echo "<script>alert('Update failed')</script>";
        } 
    
    }


    ?>
    <script>
        $('#department').change(function() {
            var dept_codes = document.getElementById("department").value;
            $.get("./courses_list.php", {
                dept_code: dept_codes
            }, function(data, status) {

                document.getElementById("subject").innerHTML = data;
                console.log(data);
            });
        });
    </script>
</body>

</html>


<!--

        //$rollrange = json_decode($rollrange);
        //$active_rolls += $rollrange;
        
        //basically active_rolls are the one coming through the post req
        //rollrange are the ones already present in the database
        //we need to merge them and then update the database
        //echo "<script>alert('$rollrange')</script>";

 //echo "<script>alert('$final')</script>";
        /*
        $final = array_merge($active_rolls, $rollrange);
        //$final = array_diff($final, $remove_rolls);
        $final = array_unique($final);
        $final = json_encode($final);
        $final = str_replace(" ", "", $final);
        echo "<script>alert('$final')</script>";
        */

        

       // $active_rolls = array_unique($active_rolls); 
        //$student_count = count($active_rolls);
       
       // $active_rolls = json_encode($active_rolls);
        //echo "<script>alert('$active_rolls')</script>";
        /*
        $sqltest = "SELECT * FROM `groups` WHERE `deptcode` = '$deptcode' AND `year` = '$year' AND `subject` = '$subject'";
        $resulttest = mysqli_query($conn, $sqltest);
        if (mysqli_num_rows($resulttest) > 0) {
            echo "<script>alert('Group already exists');</script>";
            echo "<script>window.location.href='create_group.php';</script>";
        } else {
            $sql = "INSERT INTO groups(year, semester, subject , deptcode, activeRoll, teacher_id, student_count) VALUES ('$year','{$_POST["semester"]}','$subject', '$deptcode', '$active_rolls', '{$_SESSION["id"]}', '$student_count')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Group created successfully');</script>";
                echo "<script>window.location.href='feedback_home.php';</script>";
            } else {
                echo mysqli_error($conn);
            }
        } */

          <script type="text/babel">
      function LatestFeedBack() {
        const [date, setDate] = React.useState("2022-07-15");
        const [data, setData] = React.useState(null);

        const fetchData = (date) => {
          var requestOptions = {
            method: "GET",
            redirect: "follow",
          };

          fetch(
            `http://localhost:9090/datedetails.php?date=${date}`,
            requestOptions
          )
            .then((response) => response.json())
            .then((result) => setData(result))
            .catch((error) => console.log("error", error));
        };

        React.useEffect(() => {
          fetchData(date);
        }, [date]);

        return (
          <div>
            <input
              type="date"
              onChange={(e) => {
                setDate(e.target.value);
              }}
            />

            <br />
            <table>
              <tr>
                <th>Subject</th>
                <th>Teacher</th>
                <th>Date</th>
              </tr>
              {data ? (
                <>
                  {data.map((d) => {
                    return (
                      <tr>
                        <td> {d?.subject} </td>
                        <td> {d?.teacher} </td>
                        <td> {d?.date} </td>
                      </tr>
                    );
                  })}
                </>
              ) : null}
            </table>
          </div>
        );
      }

      ReactDOM.render(<LatestFeedBack />, document.getElementById("mydiv"));
    </script>







    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var highlightDate = {};
            var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true,
                prevArrow: "<span title=\"Previous month\">&laquo;</span>",
                nextArrow: "<span title=\"Next month\">&raquo;</span>",
                defaultDate: defaultDate,
                touchUi: true,
                onChange: function(selectedDates, dateStr, instance) {
                    var date = new Date(dateStr);
                    
                    
                    //window.location.href = "?date=" + date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
                    //alert(date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate());
                    //var dateUTC = new Date(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate());
                    //alert(dateUTC);
                    //highlightDate[dateUTC] = dateUTC;
                    //document.getElementById("chartjs-dashboard-line").chartjs.update();
                    
                    function postSend() {
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", url , true);
                        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhr.send("date=" + dateStr);
                    }

                }
            });
        });

    </script>





    <script>
        var highlightDate = {};
        highlightDate[ new Date('01/20/2022')] = new Date('01/20/2022');
        highlightDate[ new Date('01/21/2022')] = new Date('01/21/2022');
        highlightDate[ new Date('01/22/2022')] = new Date('01/22/2022');
        highlightDate[ new Date('01/23/2022')] = new Date('01/23/2022');

        $('#datepickerId').datepicker({
            beforeShowDay: function( date ) {
                var highlight = highlightDate[date];
                if( highlight ) {
                    return [true, "eventClass", 'Tooltip text'];
                } else {
                    return [true, '', ''];
                }
            }
        });
    </script>

    -->