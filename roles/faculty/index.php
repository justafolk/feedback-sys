<?php 

session_start();

if($_SESSION['role'] != 'Faculty'){
    echo "<script>alert('Invalid Session, please login again');</script>";
    echo "<script>window.location.href='index.php';</script>";  
}else{

   echo "Faculty index";
}

?>