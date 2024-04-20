<?php
require('../include/dbConnect.php');

if (isset($_POST['inventory_btn'])) {
    $itemName = $_POST['item_name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];

    if ($itemName == "" || $category == "" || $quantity == "") {
        echo "<script>alert('Please fill all fields.');</script>";
    } else {
        $sql = "INSERT INTO inventory (item_name, category, quantity) VALUES ('$itemName', '$category', '$quantity')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Inventory added successfully.');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
}

if (isset($_POST['update_btn'])) {
    $itemId = $_POST['id'];
    $itemName = $_POST['item_name'];
    $category = $_POST['category'];
    $quantity = $_POST['quantity'];

    if ($itemId == "" || $itemName == "" || $category == "" || $quantity == "") {
        echo "<script>alert('Please fill all fields.');</script>";
    } else {
        $sql = "UPDATE inventory SET item_name='$itemName', category='$category', quantity='$quantity' WHERE id='$itemId'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Inventory updated successfully.');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
}

if (isset($_POST['delete_btn'])) {
    $itemId = $_POST['item_id'];

    if ($itemId == "") {
        echo "<script>alert('Please select an item to delete.');</script>";
    } else {
        $sql = "DELETE FROM inventory WHERE id='$itemId'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Inventory deleted successfully.');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
}

mysqli_close($conn);
?>
