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

    <style>
    .alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:4rem}.alert-dismissible .close{position:absolute;top:0;right:0;padding:.75rem 1.25rem;color:inherit}.alert-primary{color:#004085;background-color:#cce5ff;border-color:#b8daff}.alert-primary hr{border-top-color:#9fcdff}.alert-primary .alert-link{color:#002752}.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}.alert-secondary hr{border-top-color:#c8cbcf}.alert-secondary .alert-link{color:#202326}.alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb}.alert-success hr{border-top-color:#b1dfbb}.alert-success .alert-link{color:#0b2e13}.alert-info{color:#0c5460;background-color:#d1ecf1;border-color:#bee5eb}.alert-info hr{border-top-color:#abdde5}.alert-info .alert-link{color:#062c33}.alert-warning{color:#856404;background-color:#fff3cd;border-color:#ffeeba}.alert-warning hr{border-top-color:#ffe8a1}.alert-warning .alert-link{color:#533f03}.alert-danger{color:#721c24;background-color:#f8d7da;border-color:#f5c6cb}.alert-danger hr{border-top-color:#f1b0b7}.alert-danger .alert-link{color:#491217}.alert-light{color:#818182;background-color:#fefefe;border-color:#fdfdfe}.alert-light hr{border-top-color:#ececf6}.alert-light .alert-link{color:#686868}.alert-dark{color:#1b1e21;background-color:#d6d8d9;border-color:#c6c8ca}   </style>
    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <title>Add Course</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php
        session_start();
        error_reporting(0);
        include 'sidebar.php';
        include 'confirm.php';
        require_once "../../imports/config.php";
        ?>
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <div>
                    <h1 class="h3 mb-0"><strong>New Course</strong></h1>
                </div>
                <?php
                include 'notification.php';
                ?>
            </nav>
            <main class="d-flex w-100">
                <div class="container d-flex flex-column">
                    <div class="row vh-500">
                        <div class="col-md-12">
                            <div class="align-middle">

                                <div class="text-center mt-4">
                                    <h1 class="h2">New Course</h1>
                                    <p class="lead">
                                        Create a New Course
                                    </p>
                                </div>
                                <div class="card shadow-none border">
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="course_name">
                                                            Course Name
                                                        </label>
                                                        <input type="text" name="course_name" id="course_name" class="form-control" placeholder="Course Name">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="course_code">
                                                            Course Code
                                                        </label>
                                                        <input type="text" name="course_code" id="course_code" class="form-control" placeholder="Course Code">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group mb-3">
                                                    <label for="dept_code">
                                                        Department
                                                    </label>
                                                    <select class="form-control" name="dept_code" id="dept_code">
                                                        <?php
                                                        $sql = "Select * from departments";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo "<option value={$row['dept_id']}> {$row['dept_name']} </option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-3 col-3">
                                                    <label for="stream">Select Mode</label>
                                                    <select class="form-control" name="mode" id="mode">
                                                        <option value="Theory">Theory</option>
                                                        <option value="Practical">Practical</option>
                                                        <option value="T&P">Theory and Practical</option>
                                                    </select>
                                                </div>
                                                <div class="">
                                                    <button class="btn btn-dark btn-ecomm" name="submit">Submit</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php
                                if (isset($_POST["submit"])) {
                                    $course_name = $_POST["course_name"];
                                    $course_code = $_POST["course_code"];
                                    $dept_code = $_POST["dept_code"];
                                    $mode = $_POST["mode"];
                                    $final_name = $course_name . " - " . $mode;
                                    $final_code = $course_code . " - " . $mode;
                                    //echo "<script>alert('$final_name')</script>";
                                    $sql = "INSERT INTO `courses` (`course_name`, `course_code`, `dept_code`) VALUES ('$final_name', '$final_code', '$dept_code')";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result) {
                                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Success!</strong> Course Added Successfully.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                                    } else {
                                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error!</strong> Course Not Added.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                                    }
                                    /*
                                    echo "<script>alert('$_POST[course_name]')</script>";
                                    echo "<script>alert('$_POST[mode]')</script>";
                                    $course_name = $_POST['course_name'] + '-' + $_POST['mode'];    
                                    echo "<script>alert('$course_name')</script>";

                                    $sql = "insert into courses (course_name, course_code, dept_code) values ('$course_name','{$_POST['course_code']}','{$_POST['dept_code']}')";
                                    $result = mysqli_query($conn, $sql);
                                    if (!$result) { */
                                    }
                                ?>

                                <div class="card border shadow-none my-3">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table" id="courses">
                                                <thead>
                                                    <th>Course Name</th>
                                                    <th>Course Code</th>
                                                    <th>Department</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = "select * from courses ORDER BY id DESC";
                                                    $result = mysqli_query($conn, $sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<tr>";
                                                        echo "<td> {$row['course_name']} </td>";
                                                        echo "<td> {$row['course_code']} </td>";
                                                        echo "<td> {$row['dept_code']} </td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php
            #include 'footer.php';
            ?>
        </div>
        <script>
            $(document).ready(function() {
                $('#courses').DataTable();
            });
        </script>
        <script src="js/app.js"></script>

</body>

</html>
