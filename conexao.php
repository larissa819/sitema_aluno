<?php
    $con=mysqli_connect("localhost", "root", "");

    if(!$con){
        echo mysqli_connect_error($con);
    }

    $db = mysqli_select_db($con, "alunos");
    
    if(!$db){
        echo mysqli_error($con);
    }
?>