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
    <title>Suggestions</title>
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
                    <h1 class="h3 mb-0"><strong>Suggestions</strong></h1>
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
                                    <h1 class="h2">Suggestions</h1>
                                    <p class="lead">By Academic Year and Department</p>
                                </div>
                              <div class="card border shadow-none my-3">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table" id="courses">
                                                <thead>
                                                    <th>Course Name</th>
                                                    <th>Academic Year</th>
                                                    <th>Department</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                          $sql = "Select * from forms, courses where course_name like '%suggest%' and forms.course_code = courses.course_code";
$res = mysqli_query($conn, $sql);
                                                   while ($row = mysqli_fetch_assoc($res)) {
                                                        echo "<tr>";
                                                        echo "<td> {$row['course_name']} </td>";
                                                        echo "<td> {$row['academic_year']} </td>";
                                                        echo "<td> {$row['dept_code']} </td>";
                                                        // echo "<td> <button type=\"button\" class='btn btn-md btn-dark btn-ecomm'  onclick=\"window.location.href='./final_suggestions.php?academic_year=$row[academic_year]&course_name=$row[course_code]&dept_code=$row[dept_code]'\" >View</button> </td>";
                                                         echo "<td> <button type=\"button\" class='btn btn-md btn-dark btn-ecomm'  onclick=\"window.location.href='./final_suggestions.php?id=$row[form_id]'\" >View</button> </td>";
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
