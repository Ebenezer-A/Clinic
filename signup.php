<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once "config.php";

    // Get username, email, and password from the form
    $firstname = $_POST["frist_name"];
    $lastname = $_POST["last_name"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phone_number"];
    $password = $_POST["password"];
    $passwordconfirm = $_POST["password-confirm"];
    if ($password != $passwordconfirm) {
        echo "Error: Passwords do not match.";
        exit;
    }
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement
    $sql = "INSERT INTO patients (first_name, last_name, email, password, phone_number) VALUES ('$firstname', '$lastname', '$email', '$hashed_password', '$phonenumber')";
var_dump($sql);
$result = mysqli_query($conn, $sql);

if ($result) {
    // Redirect to login page after successful registration
    header("Location: login.html");
    exit;
} else {
    echo "Error registering user: " . mysqli_error($conn);
}

    $stmt->close();
    $conn->close();
}
?>