<?php 
include'header.php';
session_start();
?>

<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    <p>Hello, <?php echo $_SESSION["email"]; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>