<?php session_start(); ?>
<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="index.html">
      
      <span class="align-middle"><img src="../../assets/img/logo.png" style="width:30px" alt="">CWIT FEEDBACK SYS</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Pages
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="index.php">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Home</span>
        </a>
      </li>
<!--
      <li class="sidebar-item ">
        <a class="sidebar-link" href="feedback_home.php">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">View Feedback</span>
        </a>
      </li>
-->
      
      <li class="sidebar-item ">
        <a class="sidebar-link" href="create_group.php">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Create student group</span>
        </a>
      </li>

      
      <li class="sidebar-item ">
        <a class="sidebar-link" href="change_pass.php">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Change password</span>
        </a>
      </li>

      
      <ul class="sidebar-nav">
      <li class="sidebar-header">
        Feedbacks
      </li>
      <li class="sidebar-item">
              <a class="sidebar-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="align-middle" data-feather="bar-chart-2"></i> <span> View Feedbacks</span>
              </a>
              <ul id="charts-nav" class="collapse" style="list-style-type:none;">
                <li class="sidebar-item">
                  <a class="sidebar-link" href="feedback_home.php">
                    <span class="align-middle">Created Forms </span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="requested_forms.php">
                    <span class="align-middle">Requested Feedbacks</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="active_forms.php">
                    <span class="align-middle">Active Feedbacks</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="past_feedbacks.php">
                    <span class="align-middle">Past Feedbacks</span>
                  </a>
                </li>
              
              </ul>
            </li>

<ul class="sidebar-nav">
      <li class="sidebar-header">
        Sign out
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="../logout.php">
          <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Log out</span>
        </a>
      </li>


    </ul>
  </div>
</nav>