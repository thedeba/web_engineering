<?php
    include 'connection.php';
    $up = $_POST['up'];
    $upv = $_POST['upv'];


    $sql = "UPDATE data SET First_Name = '$upv' WHERE Email = '$up'";
    $run = mysqli_query($con, $sql);

    if(!$run){
        echo "Update failed";
    }
    else{
        header("Location: get_data.php");
        echo "Update Done";
    }
?>