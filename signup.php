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

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO patients (first_name, last_name, email, password, phone_number) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $email, $hashed_password, $phonenumber);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: login.html");
        exit();
    } else {
        echo "Error registering user: " . $conn->error;
    }
}
?>