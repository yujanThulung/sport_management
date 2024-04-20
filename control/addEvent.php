<?php require('../include/dbConnect.php'); ?>
<?php
if(isset($_POST['addEvent_btn'])) {
    $event_name = strtolower($_POST['event_name']);
    $from_date = $_POST['from'];
    $to_date = $_POST['to'];

    $sql = "INSERT INTO event (event_name, from_date, to_date) 
            VALUES ('$event_name', '$from_date', '$to_date')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Record inserted successfully');</script>";
        //header('Location: ../admin/sports.php');
        //exit;
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        //header('Location: ../admin/sports.php');
        exit;
    }

    
}else{
    echo "dfaljale";
}
mysqli_close($conn);
?>
