<?php

  session_start();
  session_destroy();
  
  $_SESSION['role'] = "xyz";

  header("Location: ../index.php");
  exit();
?>
