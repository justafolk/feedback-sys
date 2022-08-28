<?php
    include "../../imports/config.php";
    if(isset($_POST["id1"])){
        $name = $_POST["name"];
        $sql = "INSERT INTO feedbacks (f_name, status) values('$name','Active')";
		$result = mysqli_query($conn, $sql);
        if($result){
            echo "Inactive";
        }
        else{
            echo $result;
        }
    }
?>