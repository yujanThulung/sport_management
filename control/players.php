<?php
// Include database connection
require('../include/dbConnect.php');

// Check if data is sent via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $game = $_POST['game'];
    $gender = $_POST['gender'];
    $team = $_POST['team'];

    // Prepare SQL statement to insert data into the database table
    $sql = "INSERT INTO players (name, phone, game, gender, team) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "sssss", $name, $phone, $game, $gender, $team);

    // Execute SQL statement
    if (mysqli_stmt_execute($stmt)) {
        // Close statement and connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        // Redirect to index.php with success message
        echo '<script>alert("New record inserted successfully"); window.location.replace("../user/game.php");</script>';
        exit();
    } else {
        // Close statement and connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        // Redirect to participation.php with error message
        echo '<script>alert("Error: ' . mysqli_error($conn) . '"); window.location.replace("participation.php");</script>';
        exit();
    }
} else {
    // Redirect back to the form page if request method is not POST
   echo "Invalid Request Method! Please use a POST request.";
    exit();
}
?>
