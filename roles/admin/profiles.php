<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'confirm.php';
?>

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
    <title>Profiles</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php
        include "sidebar.php";
        ?>
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <!-- <div class="d-flex justify-content-between">
                    <div>
                        <h1 class="h3 mb-0"><strong>Profiles</strong></h1>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-success">Add</button>
                        <button class="btn btn-danger">Remove</button>
                    </div>
                </div> -->
                <!-- <div class="d-flex justify-content-between">
                    <h1 class="h3 mb-0"><strong>Profiles</strong></h1>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success"><i class="align-middle me-2 mb-1" data-feather="plus"></i>Add</button>
                        <button class="btn btn-danger"><i class="align-middle me-2 mb-1" data-feather="trash-2"></i>Remove</button>
                    </div>
                </div> -->
                <div class="navbar-collapse collapse">
                    <div>
                        <h1 class="h3 mb-0"><strong>Profiles</strong></h1>
                    </div>
                    <ul class="navbar-nav navbar-align">
                        <div class="text-right">
                            <a href="add_profile.php" class="btn btn-success"><i class="align-middle me-2 mb-1" data-feather="plus"></i>Add</a>
                            <a href="remove_profile.php" class="btn btn-danger"><i class="align-middle me-2 mb-1" data-feather="trash-2"></i>Remove</a>
                        </div>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for ....">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Search</button>
                                </span>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-md-6 col-xxl-3">
                            <div class="text-center card-box">
                                <div class="member-card pt-2 pb-2">
                                    <div class="thumb-lg member-thumb mx-auto" style="width:30%;"><img src="img/photos/avatar7.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                    <div class="">
                                        <h4>Mayur Khadde</h4>
                                        <p class="text-muted">7507738781 | <a href="#" class="text-pink">mayur.194029@gmail.com</a></span></p>
                                    </div>
                                    <a type="button" href="pages-profile.php" class="btn btn-primary mt-2 waves-effect w-md waves-light">View Profile</a>
                                    <div class="d-flex justify-content-between mt-3 p-4 pb-0">
                                        <h6>Department</h6>
                                        <h6>Computer Department</h6>
                                    </div>
                                    <hr style="width:90%; margin:auto;">

                                    <div class="d-flex justify-content-between mt-0 p-4 pt-2 pb-0">
                                        <h6>Position</h6>
                                        <h6>Teacher</h6>
                                    </div>
                                    <hr style="width:90%; margin:auto;">

                                    <div class="d-flex justify-content-between mt-0 p-4 pt-2 pb-0">
                                        <h6>Feedbacks</h6>
                                        <h6>23</h6>
                                    </div>
                                    <hr style="width:90%; margin:auto;">
                                </div>
                            </div>
                        </div> -->
                        <?php
                            include "../../imports/config.php";
                            $sql = "Select * from teacher";
                            $teacher = array();
                            $t=0;
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $teacher[$t] = $row;
                                $t++;
                            }
                            for($i=0;$i<$t;$i++){
                                $name = $teacher[$i]["name"];
                                $sql2 = "SELECT uname from login where name='$name'";
                                $login = mysqli_query($conn, $sql2);
                                $login1 = mysqli_fetch_array($login);
                        ?>
                        <div class="col-12 col-md-6 col-xxl-3">
                            <div class="card flex-fill w-100 text-center pt-3 pb-3">
                                <div class="member-card pt-2 pb-2">
                                    <div class="thumb-lg member-thumb mx-auto" style="width:30%;"><img src="img/photos/avatar7.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                    <div class="mt-2">
                                        <h4><?php echo $name; ?></h4>
                                        <p class="text-muted"><?php echo $teacher[$i]["phone_no"]; ?> | <a href="#" class="text-pink"><?php echo $teacher[$i]["email"]; ?></a></span></p>
                                    </div>
                                    <a type="button" href="remove_profile.php?username=<?php echo $login1["uname"]; ?>" class="btn btn-danger mt-2 waves-effect w-md waves-light"><i class="align-middle me-2 mb-1" data-feather="trash-2"></i>Remove</a>
                                    <a type="button" href="change_pass.php?username=<?php echo $login1["uname"]; ?>" class="btn btn-primary mt-2 waves-effect w-md waves-light">Change Password</a>
                                    <div class="d-flex justify-content-between mt-3 p-4 pb-0">
                                        <h6>Department</h6>
                                        <h6><?php echo $teacher[$i]["department"]; ?></h6>
                                    </div>
                                    <hr style="width:90%; margin:auto;">

                                    <div class="d-flex justify-content-between mt-0 p-4 pt-2 pb-0">
                                        <h6>Courses | </h6>
                                        <h6><?php echo $teacher[$i]["course"]; ?></h6>
                                    </div>
                                    <hr style="width:90%; margin:auto;">

                                    <div class="d-flex justify-content-between mt-0 p-4 pt-2 pb-0">
                                        <h6>Status</h6>
                                        <h6>
                                        <?php
                                            $cc = array();
                                            $cc = explode(",",$teacher[$i]["course"]);
                                            $error = "";
                                            for($j=0;$j<count($cc);$j++){
                                                $sql = "Select active from feedbacks where cors_code = '$cc[$j]'";
                                                $status = mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_array($status);
                                                if($row){
                                                    $check = $row['active'];
                                                    if($check){
                                                        ?>
                                                        <label style="color:green">Active </label>
                                                        <?php
                                                    }
                                                    else{
                                                        ?>
                                                        <label style="color:red">Inactive </label>
                                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                        </h6>
                                    </div>
                                    <hr style="width:90%; margin:auto;">
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </main>
            <?php
            include "footer.php";
            ?>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>