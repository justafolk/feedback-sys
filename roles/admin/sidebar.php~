<?php session_start(); ?>
<style>
  .indicator { border-radius: 50%;
background-color: #fff;
color: black;
width: 20px;
height: 20px;
display: inline-block;
text-align: center;}

.sidebar-nav{
  overflow-y: auto;
}
</style>

<?php
if ($_SESSION['role'] !== "Admin") {
  header("Location ../../index.php");
}
?><nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="index.html">
      <span class="align-middle">CWIT</span>
    </a>

    <?php
    require '../../vendor/autoload.php';
    ?>
    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Pages
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="index.php">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="create_course.php">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Create Course</span>
        </a>
      </li>

      <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="dep_feedback.php">
                <i class="align-middle me-2" data-feather="plus-square"></i> <span class="align-middle">Feedbacks</span>
              </a>
            </li> 
      <li class="sidebar-item">
        <a class="sidebar-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="align-middle" data-feather="bar-chart-2"></i> <span>Feedbacks</span>
        </a>
        <ul id="charts-nav" class="collapse" style="list-style-type:none;">
          <li class="sidebar-item">
            <a class="sidebar-link" href="feedbacks.php?dept_id=10">
              <span class="align-middle">Civil Dept. </span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="feedbacks.php?dept_id=20">
              <span class="align-middle">Mechanical Dept. (Aided)</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="feedbacks.php?dept_id=21">
              <span class="align-middle">Mechanical Dept. (Un-Aided)</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="feedbacks.php?dept_id=30">
              <span class="align-middle">Electrical Dept.</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="feedbacks.php?dept_id=40">
              <span class="align-middle">Computer Dept.</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="feedbacks.php?dept_id=50">
              <span class="align-middle">E&TC Dept. (Aided)</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="feedbacks.php?dept_id=51">
              <span class="align-middle">E&TC Dept. (Un-Aided)</span>
            </a>
          </li>
        </ul>
      </li>-->

      <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="notification1.php">
                  <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Notifications</span>
                </a>

                    <li class="sidebar-item">
              <a class="sidebar-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="align-middle" data-feather="bar-chart-2"></i> <span>Feedbacks</span>
              </a>
              <ul id="charts-nav" class="collapse" style="list-style-type:none;">
                <li class="sidebar-item">
                  <a class="sidebar-link" href="feedbacks.php?dept_id=10">
                    <span class="align-middle">Civil Dept. </span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="feedbacks.php?dept_id=20">
                    <span class="align-middle">Mechanical Dept. (A)</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="feedbacks.php?dept_id=21">
                    <span class="align-middle">Mechanical Department(U)</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="feedbacks.php?dept_id=30">
                    <span class="align-middle">Electrical Department</span>
                  </a>
                </li>
                <li>
                  <a class="sidebar-link" href="feedbacks.php?dept_id=40">
                    <span class="align-middle">Computer Department</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="feedbacks.php?dept_id=50">
                    <span class="align-middle">E&TC Department(A)</span>
                  </a>
                </li>
                <li>
                  <a class="sidebar-link" href="feedbacks.php?dept_id=51">
                    <span class="align-middle">E&TC Department(U)</span>
                  </a>
                </li>
              </ul>
            </li>
            </li> -->

      <li class="sidebar-header">
        Requestes
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" data-bs-target="#charts-nav3" data-bs-toggle="collapse" href="#">
          <i class="align-middle" data-feather="bar-chart-2"></i> <span>Requests </span>

          <span class="indicator"><?php
            include "../../imports/config.php";
            $sql = "SELECT * FROM groups WHERE `req` = '1' and rejected='0' AND accepted = '0'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) != 0){
              echo ' '. mysqli_num_rows($result) . ' ';
            }
            else{
              echo "0";
            };
            //echo "<script>alert('".mysqli_num_rows($result)."')</script>";
            ?></span>

        </a>
            <?php
$depts = "select * from departments";
$res_dept = mysqli_query($conn, $depts);
while ($row=mysqli_fetch_assoc($res_dept)){
  
              ?>
        <ul id="charts-nav3" class="collapse" style="list-style-type:none;">
          <li>
        <a class="sidebar-link" href="requested_feedback.php?deptcode=<?php echo $row["dept_id"] ?>">
              <?php 
              $sqlcomp = "SELECT * FROM groups WHERE `req` = '1' and rejected='0' AND accepted = '0' AND deptcode = '$row[dept_id]'";
              $resultcomp = mysqli_query($conn, $sqlcomp);
              if(mysqli_num_rows($resultcomp) != 0){
                $status = '  <span class="indicator" >' . mysqli_num_rows($resultcomp) . '</span>';
              }
              else{
                $status = false;
              };
              ?>
  <span class="align-middle"><?php echo $row["dept_name"] ?><?php if ($status!=false){echo $status;} ?>  </span>
            </a>
          </li>
        </ul>
      </li>
              <?php } ?>




      <li class="sidebar-header">
        Forms
      </li>
      <!--
      <li class="sidebar-item">
        <a class="sidebar-link" href="create_form.php">
          <i class="align-middle me-2" data-feather="plus-square"></i> <span class="align-middle">Create New Form</span>
        </a>
      </li> -->

      <li class="sidebar-item">
        <a class="sidebar-link" data-bs-target="#charts-nav1" data-bs-toggle="collapse" href="#">
          <i class="align-middle" data-feather="bar-chart-2"></i> <span>View Feedbacks</span>
        </a>
        <ul id="charts-nav1" class="collapse" style="list-style-type:none;">
      <?php 
$sql = "select * from departments";
$results = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($results)){
  
?>
          <li>
          <a class="sidebar-link" href="view_form.php?deptcode=<?php echo $row["dept_id"] ?>">
          <span class="align-middle"><?php echo $row["dept_name"] ?></span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" data-bs-target="#charts-nav2" data-bs-toggle="collapse" href="#">
          <i class="align-middle" data-feather="bar-chart-2"></i> <span>Past Feedbacks</span>
        </a>
        <ul id="charts-nav2" class="collapse" style="list-style-type:none;">
      <?php 
$sql = "select * from departments";
$results = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($results)){
  
?>
          <li>
          <a class="sidebar-link" href="view_form.php?deptcode=<?php echo $row["dept_id"] ?>">
          <span class="align-middle"><?php echo $row["dept_name"] ?></span>
            </a>
          </li>
          <?php } ?>
</ul>
      </li>


      <li class="sidebar-header">
        Profiles
      </li>
      <!--
      <li class="sidebar-item">
        <a class="sidebar-link" href="profiles.php">
          <i class="align-middle me-2" data-feather="users"></i> <span class="align-middle">All Profiles</span>
        </a>
      </li> -->

      <li class="sidebar-item">
        <a class="sidebar-link" href="change_pass.php">
          <i class="align-middle" data-feather="book"></i> <span class="align-middle">Change Password</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="add_profile.php">
          <i class="align-middle me-2" data-feather="user-plus"></i> <span class="align-middle">Add User</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="remove_profile.php">
          <i class="align-middle me-2" data-feather="user-x"></i><span class="align-middle">Remove User</span>
        </a>
      </li>

      <!-- <li class="sidebar-header">
                Plugins & Addons
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="charts-chartjs.html">
                  <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
                  <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                </a>
            </li> -->
    </ul>
  </div>
</nav>
