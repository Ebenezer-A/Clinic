<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include_once "config.php";

    // Get email and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate email and password
    if (empty($email) || empty($password)) {
        echo "email and password are required";
    } else {
        // Prepare SQL statement
        $stmt = $conn->prepare("SELECT * FROM patients WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Check if user exists
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            // Verify password
            if (password_verify($password, $user["password"])) {
                // Password is correct, start session
                $_SESSION["email"] = $user["email"];
                $_SESSION["first_name"] = $user["first_name"];
                $_SESSION["last_name"] = $user["last_name"];
                $_SESSION["phone_number"] = $user["phone_number"];
                $_SESSION["role"] = $user["role"];
                $_SESSION["description"] = $user["description"];
                $_SESSION["emergency"] = $user["emergency"];
                $_SESSION["scheduled_for"] = $user["scheduled_for"];
                header("Location: profile.php");
                exit();
            } else {
                echo "Invalid password";
            }
        } else {
            echo "User not found";
        }
    }
}
?>
