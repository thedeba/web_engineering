<?php
    include 'connection.php';
    $del = $_POST['del'];

    $sql = "DELETE FROM data WHERE Email = '$del'";
    $run = mysqli_query($con, $sql);

    if(!$run){
        echo "Delation failed";
    }
    else{
        header("Location: get_data.php");
        echo "Delation Done";
    }
?>