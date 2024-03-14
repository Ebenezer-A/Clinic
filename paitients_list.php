<?php
session_start();
include 'header.php';
include 'side.php';


?>

<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>


<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                  <div class="card">

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-md">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Appointment</th>
                <th>Status</th>
                <th>Emergency </th>
            </tr>
            <!-- PHP code to fetch data from the database and populate the table -->
            <?php
            // Include database connection
            include_once "config.php"; // Assuming your database connection file is named config.php
            
            // Query to select data from the database
            $query = "SELECT * FROM patients WHERE status='Active'"; // Replace "your_table_name" with your actual table name
            
            // Execute the query
            $result = mysqli_query($conn, $query);
            
            // Check if the query was successful
            if ($result) {
                // If there are rows in the result set
                if (mysqli_num_rows($result) > 0) {
                    // Loop through each row in the result set
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Output the data in table rows
                        $_SESSION['patient_email']=$row ['email'];
                        echo "tr";
                        echo "<td>" .$row ['Num'];
                        echo "<td>" . $row['first_name'] . "</td>"; // Assuming 'id' is the primary key column
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone_number'] . "</td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "<td><div class='badge badge-" . ($row['status'] == 'Active' ? 'success' :'danger') . "'>" . $row['status'] . "</div></td>";
                        echo "<td><div class='badge badge-" . ($row['emergency'] == 'Active' ? 'success' :'danger') . "'>" . $row['emergency'] . "</div></td>";
                        echo "<td><a href='alter.php' class='btn btn-primary'>Detail</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No Patients for today Doc!</td></tr>";
                }
            } else {
                // If the query fails
                echo "Error: " . mysqli_error($conn);
            }
            
            // Close the database connection
            mysqli_close($conn);
            ?>
            <!-- End of PHP code -->
        </table>
      
    </div>
</div>
</div>
          </div>
          </section>
          
          </div>
          </div>
          </div>


 
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>
<?php
include 'footer.php';
?>