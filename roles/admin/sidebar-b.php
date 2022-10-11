<?php session_start(); ?>

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
              echo ' - '. mysqli_num_rows($result) . '*';
            }
            else{
              echo "";
            };
            //echo "<script>alert('".mysqli_num_rows($result)."')</script>";
            ?></span>

        </a>
        <ul id="charts-nav3" class="collapse" style="list-style-type:none;">
          <li>
            <a class="sidebar-link" href="requested_feedback.php?deptcode=40">
              <?php 
              $sqlcomp = "SELECT * FROM groups WHERE `req` = '1' and rejected='0' AND accepted = '0' AND deptcode = '40'";
              $resultcomp = mysqli_query($conn, $sqlcomp);
              if(mysqli_num_rows($resultcomp) != 0){
                $status = '[' . mysqli_num_rows($resultcomp) . ']*';
              }
              else{
                $status = "";
              };
              ?>
              <span class="align-middle">Computer Department <?php echo $status; ?></span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="requested_feedback.php?deptcode=10">
              <?php
              $sqlcivil = "SELECT * FROM groups WHERE `req` = '1' and rejected='0' AND accepted = '0' AND deptcode = '10'";
              $resultcivil = mysqli_query($conn, $sqlcivil);
              if(mysqli_num_rows($resultcivil) != 0){
                $status = '[' . mysqli_num_rows($resultcivil) . ']*';
              }
              else{
                $status = "";
              };
              ?>
              <span class="align-middle">Civil Department <?php echo $status; ?></span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="requested_feedback.php?deptcode=20">
              <?php
                               $sqlmecha = "SELECT * FROM groups WHERE `req` = '1' and rejected='0' AND accepted = '0' AND deptcode = '20'";
                               $resultmecha = mysqli_query($conn, $sqlmecha);
                               if(mysqli_num_rows($resulmeacha) != 0){
                                 $status = '[' . mysqli_num_rows($resultmecha) . ']*';
                               }
                               else{
                                 $status = "";
                               }; 
              ?>
              <span class="align-middle">Mechanical Department(A)</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="requested_feedback.php?deptcode=21">
              <?php
                                $sqlmecha = "SELECT * FROM groups WHERE `req` = '1' and rejected='0' AND accepted = '0' AND deptcode = '21'";
                                $resultmecha = mysqli_query($conn, $sqlmecha);
                                if(mysqli_num_rows($resulmeacha) != 0){
                                  $status = '[' . mysqli_num_rows($resultmecha) . ']*';
                                }
                                else{
                                  $status = "";
                                };
              ?>
              <span class="align-middle">Mechanical Department(U)</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="requested_feedback.php?deptcode=30">
              <?php
                                $sqlelec = "SELECT * FROM groups WHERE `req` = '1' and rejected='0' AND accepted = '0' AND deptcode = '30'";
                                $resultelec = mysqli_query($conn, $sqlelec);
                                if(mysqli_num_rows($resulelec) != 0){
                                  $status = '[' . mysqli_num_rows($resultelec) . ']*';
                                }
                                else{
                                  $status = "";
                                };    
              ?>
              <span class="align-middle">Electrical Department</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="requested_feedback.php?deptcode=70">
              <?php
                                $sqlit = "SELECT * FROM groups WHERE `req` = '1' and rejected='0' AND accepted = '0' AND deptcode = '70'";
                                $resultit = mysqli_query($conn, $sqlit);
                                if(mysqli_num_rows($resulit) != 0){
                                  $status = '[' . mysqli_num_rows($resultit) . ']*';
                                }
                                else{
                                  $status = "";
                                };  
                                ?>
              <span class="align-middle">E&TC Department(A)</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="requested_feedback.php?deptcode=71">
              <?php
                                $sqlit = "SELECT * FROM groups WHERE `req` = '1' and rejected='0' AND accepted = '0' AND deptcode = '71'";
                                $resultit = mysqli_query($conn, $sqlit);
                                if(mysqli_num_rows($resulit) != 0){
                                  $status = '[' . mysqli_num_rows($resultit) . ']*';
                                }
                                else{
                                  $status = "";
                                };  
                                ?>
              <span class="align-middle">E&TC Department(U)</span>
            </a>
          </li>
        </ul>
      </li>




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
          <li>
            <a class="sidebar-link" href="view_form.php?deptcode=40">
              <span class="align-middle">Computer Department</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="view_form.php?deptcode=10">
              <span class="align-middle">Civil Department</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="view_form.php?deptcode=20">
              <span class="align-middle">Mechanical Department(A)</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="view_form.php?deptcode=21">
              <span class="align-middle">Mechanical Department(U)</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="view_form.php?deptcode=30">
              <span class="align-middle">Electrical Department</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="view_form.php?deptcode=50">
              <span class="align-middle">E&TC Department(A)</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="view_form.php?deptcode=51">
              <span class="align-middle">E&TC Department(U)</span>
            </a>
          </li>

        </ul>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" data-bs-target="#charts-nav2" data-bs-toggle="collapse" href="#">
          <i class="align-middle" data-feather="bar-chart-2"></i> <span>Past Feedbacks</span>
        </a>
        <ul id="charts-nav2" class="collapse" style="list-style-type:none;">
          <li>
            <a class="sidebar-link" href="past_form.php?deptcode=40">
              <span class="align-middle">Computer Department</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="past_form.php?deptcode=10">
              <span class="align-middle">Civil Department</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="past_form.php?deptcode=20">
              <span class="align-middle">Mechanical Department(A)</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="past_form.php?deptcode=21">
              <span class="align-middle">Mechanical Department(U)</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="past_form.php?deptcode=30">
              <span class="align-middle">Electrical Department</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="past_form.php?deptcode=50">
              <span class="align-middle">E&TC Department(A)</span>
            </a>
          </li>
          <li>
            <a class="sidebar-link" href="past_form.php?deptcode=51">
              <span class="align-middle">E&TC Department(U)</span>
            </a>
          </li>

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
