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
                        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto h-100 mt-4">
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
                                                    <div class="form-group">
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
                                                <div class="form-group">
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
                                                <div class="col-md-1 my-2">

                                                    <button class="btn btn-dark btn-ecomm" name="submit">Submit</button>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php
                                if (isset($_POST["submit"])) {
                                    $sql = "insert into courses (course_name, course_code, dept_code) values ('{$_POST['course_name']}','{$_POST['course_code']}','{$_POST['dept_code']}')";
                                    $result = mysqli_query($conn, $sql);
                                    if (!$result) {
                                ?>
                                        <div class="alert alert-danger" role="alert">
                                            There was a problem while inserting data!
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="alert alert-success" role="alert">
                                            Course Created Successfully!!!
                                        </div>
                                <?php
                                    }
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
                                                    $sql = "select * from courses";
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