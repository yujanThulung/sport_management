<?php require('../include/dbConnect.php'); ?>



<?php
if (isset($_POST['register_btn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['c-password']; // corrected input name

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format.");
    }

    // Validate password length
    if (strlen($password) < 6) {
        die("Error: Password must be at least 6 characters long.");
    }

    // Check if password matches confirm password
    if ($password != $confirm_password) {
        die("Error: Passwords do not match.");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // // Check if email is unique
    // $email_check_sql = "SELECT * FROM user WHERE email='$email'";
    // $result = mysqli_query($conn, $email_check_sql);
    // if (mysqli_num_rows($result) > 0) {
    //     die("Error: Email already exists.");
    // }

    // Insert data into user table
    $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    $sql_run = mysqli_query($conn, $sql);
    if ($sql) {
        //$_SESSION['email'] = $email;
        echo "<script>alert('Registration successful');</script>";
        // $_SESSION['status'] = "Registered Successfully!";
        // $_SESSION['status_code'] = "success";
        header("Location: ../login.php");
        exit; // Added exit to prevent further execution
    } else {

        echo "<script>alert('Registration Failed');</script>";
        // $_SESSION['email'] = $email;
        // $_SESSION['status'] = "Data not Registered!";
        // $_SESSION['status_code'] = "error";
        header("Location: ../register.php");
        exit;
    }
} else {
    echo "not set";
}




//login 


if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $email;
            if ($row['userType'] == 'admin') {
                header("Location: ../admin/dashboard.php");
                exit();
            } elseif ($row['userType'] == 'user') {
                header("Location: ../user/dashboard.php");
                exit();
            } else {
                echo "Invalid user type";
            }
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}
mysqli_close($conn);
?>
