<?php
session_start();  
?>
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
  <span class="align-middle">CWIT</span>
</a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="index.php">
                  <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="dep_feedback.php">
                <i class="align-middle me-2" data-feather="plus-square"></i> <span class="align-middle">Feedbacks</span>
              </a>
            </li> -->
            <li class="sidebar-item">
              <a class="sidebar-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="align-middle" data-feather="bar-chart-2"></i> <span>Feedbacks</span>
              </a>
              <ul id="charts-nav" class="collapse" style="list-style-type:none;">
                <li class="sidebar-item">
                  <a class="sidebar-link" href="civil_department.php">
                    <span class="align-middle">Civil Dept. </span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="mech_department_a.php">
                    <span class="align-middle">Mechanical Dept. (Aided)</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="mech_department_u.php">
                    <span class="align-middle">Mechanical Dept. (Un-Aided)</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="elec_department.php">
                    <span class="align-middle">Electrical Dept.</span>
                  </a>
                </li>
                <li>
                  <a class="sidebar-link" href="dep_feedback2.php">
                    <span class="align-middle">Computer Dept.</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="etc_department_a.php">
                    <span class="align-middle">E&TC Dept. (Aided)</span>
                  </a>
                </li>
                <li>
                  <a class="sidebar-link" href="etc_department_u.php">
                    <span class="align-middle">E&TC Dept. (Un-Aided)</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="notification1.php">
                  <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Notifications</span>
                </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="student.php">
                <i class="align-middle" data-feather="book"></i> <span class="align-middle">Student Info</span>
              </a>
            </li>

            <li class="sidebar-header">
              Forms
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="create_form.php">
                  <i class="align-middle" data-feather="user"></i> <span class="align-middle">Create Form</span>
                </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" data-bs-target="#charts-nav1" data-bs-toggle="collapse" href="#">
                <i class="align-middle" data-feather="bar-chart-2"></i> <span>View Form</span>
              </a>
              <ul id="charts-nav1" class="collapse" style="list-style-type:none;">
                <li>
                  <a class="sidebar-link" href="view_form.php">
                    <span class="align-middle">Computer Dept.</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="view_form.php">
                    <span class="align-middle">Civil Dept. </span>
                  </a>
                </li>
                <!-- <li class="sidebar-item">
                  <a class="sidebar-link" href="mech_department_a.php">
                    <span class="align-middle">Mechanical Dept. (Aided)</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="mech_department_u.php">
                    <span class="align-middle">Mechanical Dept. (Un-Aided)</span>
                  </a>
                </li> -->
                <li class="sidebar-item">
                  <a class="sidebar-link" href="view_form.php ">
                    <span class="align-middle">Electrical Dept.</span>
                  </a>
                </li>
                <!-- <li class="sidebar-item">
                  <a class="sidebar-link" href="etc_department_a.php">
                    <span class="align-middle">E&TC Dept. (Aided)</span>
                  </a>
                </li>
                <li>
                  <a class="sidebar-link" href="etc_department_u.php">
                    <span class="align-middle">E&TC Dept. (Un-Aided)</span>
                  </a>
                </li> -->
              </ul>
            </li>

            <li class="sidebar-header">
                Profiles
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-profile.php">
                  <i class="align-middle" data-feather="user"></i> <span class="align-middle">Account</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="form.php">
                  <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="profiles.php">
                  <i class="align-middle me-2" data-feather="users"></i> <span class="align-middle">All Profiles</span>
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