<?php session_start(); ?>

<?php 
if ($_SESSION['role'] !== "Student"){
  header("Location ../../index.php");
}
?>
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

      <li class="sidebar-item ">
        <a class="sidebar-link" href="feedback_home.php">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Feedbacks</span>
        </a>
      </li>

      <li class="sidebar-item ">
        <a class="sidebar-link" href="change_password.php">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Change Password</span>
        </a>
      </li>

      <li class="sidebar-item ">
        <a class="sidebar-link" href="../logout.php">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Log Out</span>
        </a>
      </li>

     


    </ul>
  </div>
</nav>
