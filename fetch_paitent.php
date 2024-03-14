<?php
session_start();

include "config.php";
$email = $_GET['email'];
var_dump($email);
$sql = "SELECT * FROM patients WHERE email = '$email';";

if ($email) {
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['paitent_first_name'] = $user['first_name'];
        $_SESSION['paitent_last_name'] = $user['last_name'];
        $_SESSION["paitent_email"] = $user['email'];
        $_SESSION["paitent_phone_number"] = $user['phone_number'];
        $_SESSION["paitent_description"] = $user['description'];
        $_SESSION["paitent_emergency"] = $user['emergency'];
        $_SESSION["paitent_scheduled_for"] = $user['scheduled_for'];
        header("Location: paitient info.php");
    } else {
        echo "user not found!";
    }
} else {
    echo "email not found!";
    // header("Location: paitients_list.php");

}
?>