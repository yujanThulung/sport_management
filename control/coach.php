<?php
require('../include/dbConnect.php');

// Insertion code
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_coach'])) {
    // Collect form data
    $name = $_POST['name'];
    $game = $_POST['game'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];

    // Prepare SQL statement
    $sql = "INSERT INTO coach (name, game, gender, contact) VALUES ('$name', '$game', '$gender', '$contact')";

    // Execute the statement
    if (mysqli_query($conn, $sql)) {
        // Display success message using JavaScript alert
        echo "<script>alert('Coach added successfully!');</script>";
        // Redirect back to coach.php
        //header("Location: ../admin/coach.php");
        //exit(); // Make sure to exit after redirection
    } else {
        // Display error message using JavaScript alert
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
    mysqli_close($conn);
}


//for deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_coach'])) {
    // Check if ID is provided
    if(isset($_POST['id'])) {
        // Sanitize the ID to prevent SQL injection
        $coach_id = mysqli_real_escape_string($conn, $_POST['id']);
        
        // Construct the DELETE query
        $delete_query = "DELETE FROM coach WHERE id = '$coach_id'";
        
        // Execute the DELETE query
        if (mysqli_query($conn, $delete_query)) {
            // Delete successful
            echo '<script>alert("Coach deleted successfully."); window.history.back();</script>';
        } else {
            // Delete failed
            echo '<script>alert("Error deleting coach: ' . mysqli_error($conn) . '"); window.history.back();</script>';
        }
    } else {
        // ID not provided
        echo '<script>alert("Coach ID not provided."); window.history.back();</script>';
    }
}
?>



//for update 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $coach_id = $_POST['id'];
    $name = $_POST['name'];
    $game = $_POST['game'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    
    $sql = "UPDATE coach SET name='$name', game='$game', gender='$gender', contact='$contact' WHERE id=$coach_id";
    
    if (mysqli_query($conn, $sql)) {
        // Send success message to frontend
        echo "<script>alert('Coach details updated successfully'); window.location.href = '../admin/coach.php';</script>";
    } else {
        // Send error message to frontend
        echo "<script>alert('Error updating coach details: " . mysqli_error($conn) . "'); window.location.href = 'admin/coach.php';</script>";
    }
}
?>


