<?php
session_start();

include "config.php";
$email=$_SESSION['patient_email'];
var_dump($email);

    $sql = "UPDATE patients SET status = 'Not Active' WHERE email =  '$email';";
    if($email){
    if (mysqli_query($conn, $sql)) {
        header("Location: paitients_list.php");

        echo "User data updated successfully!";
    } else {
        // Error message
        echo "Error updating user data: " . mysqli_error($conn);
        // header("Location: paitients_list.php");

    }
    }else{
        echo "email not found!";
        // header("Location: paitients_list.php");

    }
?>
