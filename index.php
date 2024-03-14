<?php
session_start();
include 'header.php';
include 'side.php';
include 'footer.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    /* style.css */

.image-text-overlay {
    position: relative;
    width: 100%;
    height: 100%;
}

.image-text-overlay img {
    width: 100%;
    height: 100%;
}

.overlay-text {
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    text-align: center;
    
}

/* CSS */
/* CSS */
./* CSS */
.overlay-text h2 {
    font-size: 2em;
    font-family: monospace;
    margin: 0;
    padding: 10px; /* Add padding */
    color: #ddd; /* Light gray text color */
    animation: bounce 1s ease-in-out;
}

@keyframes bounce {
    0% { transform: translateY(-20px); }
    50% { transform: translateY(10px); }
    100% { transform: translateY(0px); }
}

/* @keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

@keyframes slideRightToLeft {
    0% { transform: translateX(100%); }
    100% { transform: translateX(0%); }
} */




</style>
<body>
    <main>
        <div class="image-text-overlay">
            <img src="assets/img/photo1.jpg" alt="Clinic Image">
            <div class="overlay-text">
                <h2>Welcome to CLINIC</h2>
            </div>
        </div>
    </main>
</body>

</html>
