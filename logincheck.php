<?php
session_start();

include 'imports/config.php';

if(isset($_POST['login'])){

    $uname = $_POST['uname'];
    $passwd = $_POST['passwd'];
//    $passwd = md5($passwd);

    $sql = "SELECT * FROM login WHERE `uname` = '$uname' AND `passwd` = '$passwdx'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if($count == 1){

        if($row['role'] == 'Admin'){
            $_SESSION['uname'] = $uname;
            $_SESSION['role'] = 'Admin';
            $_SESSION["name"] = $row['name'];
            $_SESSION["id"] = $row['id'];
            header("Location: ./roles/admin/index.php");
        }
        else if($row['role'] == 'Faculty'){
            $_SESSION['uname'] = $uname;
            $_SESSION['role'] = 'Faculty';
            $_SESSION["name"] = $row['name'];
            $_SESSION["id"] = $row['id'];

            header("Location: ./roles/faculty/index.php");
        }
        else{

            if($uname == $passwd){
                echo "<script>alert('Password cannot be same as roll number, change password on following redirected form');</script>";
                echo "<script>window.location.href='changepassimp.php';</script>";
            }else{
            $_SESSION['uname'] = $uname;
            $_SESSION['role'] = 'Student';
            $_SESSION["name"] = $row['name'];
            $_SESSION["id"] = $row['id'];
            header("Location: ./roles/student/index.php");
            }
        }
    }else{
      echo $sql;
        var_dump($row);
        echo "<script>alert('Invalid username or password');</script>";
        echo "<script>window.location.href='index.php';</script>";
    }
}


?>
