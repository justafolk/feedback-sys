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

    <?php
require_once '../../imports/config.php';

$sqlidkop = "SELECT * from departments where dept_id = '{$_POST['Department']}'";
$residkop = mysqli_query($conn, $sqlidkop);
$rowidkop = mysqli_fetch_assoc($residkop);
$dept = $rowidkop['dept_name'];

?>

    <title>Suggestions | <?php echo $dept; ?></title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

   <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

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

                    <h1 class="h3 mb-0"><strong>Suggestions </strong></h1> 
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
                                    <form action="" method="post">
<div class="row">


                                    <div class="col-4">
                                        <select name="Department" id="Deparment" class="form-control">
                                             <option value="">Select Department</option>
                                                    <?php

                                                    $sql = "SELECT * FROM departments";
                                                    $result = mysqli_query($conn, $sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<option value='" . $row["dept_id"] . "'>" . $row["dept_name"] . "</option>";
                                                    }
                                                    ?>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select name="year" id="year" class="form-control">
                                            <option value="">Select Year</option>
                                            <?php 
                                                $sql = "Select YEAR(idate) as m from suggestions ";
                                                $res = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($res)){

                                                    echo "<option> {$row['m']}</option>";
                                                }
                                            ?>
                                       </select>
 
                                    </div>
                                    <div class="col-3">

                                        <select name="month" id="month" class="form-control">
                                            <option value="">Select Month</option>
                                      </select>
                                    </div>
                                    <div class="col-1">

                                        <button class="btn btn-dark btn-ecomm" type="submit" >Submit</button>
                                    </div>
                                            </form>

                                </div>
                              <div class="card border shadow-none my-3">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table" id="courses">
                                                <thead>
                                                    
                                                    <th>Sr no.</th>
                                                    <th>Suggestion - <?php echo $dept; ?></th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                          $sql = "select * from suggestions where YEAR(idate) = {$_POST['year']} and MONTH(idate) = {$_POST['month']} and roll like  '__{$_POST['Department']}__'";
                                          $res = mysqli_query($conn, $sql);

                                                   $i = 1;
                                                   while ($row = mysqli_fetch_assoc($res)) {
                                                        echo "<tr>";
                                                        echo "<td> {$i} </td>";
                                                        echo "<td> {$row['suggestion']} </td>";
                                                        echo "</tr>";
                                                        $i++;
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
                $('#courses').DataTable({
                    dom: 'Bfrtip', 
                     buttons: [
             'copyHtml5',
             'excelHtml5',
             'csvHtml5',
             'pdfHtml5'
        ] 
                 })
 
             });
         </script>
  <script>
        $('#year').change(function() {
            var dept_codes = document.getElementById("year").value;
            $.get("./parse_month.php", {
                year: dept_codes
            }, function(data, status) {

                document.getElementById("month").innerHTML = data;
                console.log(data);
            });
        });
        </script>
        <script src="js/app.js"></script>

</body>

</html>
