<?php

session_start();
// dbConnect.php

$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "sportmanegement"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// else{
//     echo " database connected";
// }
?>

<?php include('sweetalert.php');?>