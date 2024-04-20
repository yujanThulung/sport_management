<?php
require('../include/dbConnect.php');

if(isset($_POST['inventory_btn'])) {
    $item_id = $_POST['item_id'];
    $item_name = $_POST['item_name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO inventory (item_id, item_name, category, quantity) 
            VALUES ('$item_id', '$item_name', '$category', '$quantity')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Inventory added successfully');</script>";
        header("Location: ../admin/inventory.php");
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }

    mysqli_close($conn);
}
?>
