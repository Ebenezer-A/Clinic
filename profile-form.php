<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $firstName = $_POST['frist_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $emergencyStatus = $_POST['emergency_status'];
    $symptomDescription = $_POST['simptom_description'];
    $scheduled_for = $_POST['scheduled_for'];

    function isWeekend($date)
    {
        return date('w', strtotime($date)) == 0 || date('w', strtotime($date)) == 6;
    }
    function isPastWorkingHours()
    {
        $workingHoursEnd = 17;
        return date('H') >= $workingHoursEnd;
    }

    // Validate date
    if (empty($scheduled_for)) {
        $errorMessage = "Please select a schedule date.";
    } else if (strtotime($scheduled_for) < strtotime("+1 day")) {
        $errorMessage = "Schedule date must be after today within working hours.";
    } else if (isWeekend(date("Y-m-d", strtotime("+1 day", strtotime($scheduled_for))))) {
        $errorMessage = "Schedule date cannot be on a weekend. Please choose a weekday within working hours.";
    } else if (isPastWorkingHours() && !isWeekend(date("Y-m-d", strtotime("+2 day", strtotime($scheduled_for))))) {
        $errorMessage = "Schedule date cannot be on a weekend. Please choose a weekday within working hours.";
    }

    // Redirect on error
    if (isset($errorMessage)) {
        header("Location: profile.php");
        $_SESSION['erroe'] = $errorMessage; // Redirect with error message
        exit;
    }

    // Update user data query
    $sql = "UPDATE patients SET first_name='$firstName', last_name='$lastName', email='$email', phone_number='$phoneNumber', emergency='$emergencyStatus', description='$symptomDescription', scheduled_for='$scheduled_for' WHERE email='$email';";
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Update session data if necessary (e.g., first name, last name)
        $_SESSION['first_name'] = $firstName;
        $_SESSION['last_name'] = $lastName;
        $_SESSION["email"] = $email;
        $_SESSION["phone_number"] = $phoneNumber;
        $_SESSION["description"] = $symptomDescription;
        $_SESSION["emergency"] = $emergencyStatus;
        $_SESSION["scheduled_for"] = $scheduled_for;
        // Success message (consider redirecting to a success page)
        header("Location: paitient info.php");
    } else {
        // Error message
        echo "Error updating user data: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>