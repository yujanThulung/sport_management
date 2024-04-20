<?php require('../include/dbConnect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>College Sports Inventory Management</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
  }
  th, td {
    padding: 8px;
    border: 1px solid #ddd;
    text-align: center;
  }
  th {
    background-color: #f2f2f2;
  }
  #adminControls {
    margin: 20px auto;
    width: 50%;
    text-align: center;
  }
  #adminControls input[type="text"],
  #adminControls select {
    width: 100%;
    padding: 8px;
    margin: 5px 0;
    box-sizing: border-box;
  }
  #adminControls button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
  }
  #adminControls button:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
  <a href="addItem.php"><input type="button">Add Item</a>
<h1 style="text-align: center;">College Sports Inventory Management</h1>

<table id="inventoryTable">
  <thead>
    <tr>
      <th>Item ID</th>
      <th>Item Name</th>
      <th>Category</th>
      <th>Quantity</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <!-- Table body will be populated dynamically -->
  </tbody>
</table>

<div id="adminControls">
  <h2>Add Items</h2>
  <form method="post" action="../control/inventory.php"?>">
    <input type="text" name="item_name" placeholder="Item Name">
    <select name="category">
      <option value="Sports Equipment">Sports Equipment</option>
      <option value="Uniforms">Uniforms</option>
      <option value="Training Gear">Training Gear</option>
      <option value="Miscellaneous">Miscellaneous</option>
    </select>
    <input type="number" name="quantity" placeholder="Quantity">
    <button type="submit" name="inventory_btn">Add Item</button>
  </form>
</div>



</body>
</html>
