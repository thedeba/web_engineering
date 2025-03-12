<?php
    include 'connection.php';

    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];


    $sql = "INSERT INTO data(First_Name, Last_Name, Email, Gender, DOB, Passwords) VALUES('$first_name','$last_name', '$email', '$gender', '$dob', '$password')";
    $run = mysqli_query($con, $sql);

    if(!$run){
        echo 'submission failed';
    } else{
        header("Location: get_data.php");
    }
?>