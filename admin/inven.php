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
  <input type="text" id="itemName" placeholder="Item Name">
  <select id="category">
    <option value="Sports Equipment">Sports Equipment</option>
    <option value="Uniforms">Uniforms</option>
    <option value="Training Gear">Training Gear</option>
    <option value="Miscellaneous">Miscellaneous</option>
  </select>
  <input type="number" id="quantity" placeholder="Quantity">
  <button id="addItemBtn">Add Item</button>
</div>

<script>
  $(document).ready(function() { 
    // Variable to store the current item ID
    var currentItemId = 1;
  
    // Function to add a new row to the table
    function addRow(itemName, category, quantity) {
      var newRow = "<tr>" +
                     "<td>" + currentItemId + "</td>" +
                     "<td>" + itemName + "</td>" +
                     "<td>" + category + "</td>" +
                     "<td>" + quantity + "</td>" +
                     "<td>" +
                       "<button class='delete-btn'>Delete</button>" +
                       "<button class='withdraw-btn'>Withdraw</button>" +
                       "<button class='add-btn'>Add</button>" +
                     "</td>" +
                   "</tr>";
      $("#inventoryTable tbody").append(newRow);
      currentItemId++;
    }
  
    // Event handler for Add Item button in Admin Controls
    $("#addItemBtn").click(function() {
      var itemName = $("#itemName").val();
      var category = $("#category").val();
      var quantity = parseInt($("#quantity").val());
  
      if (itemName.trim() === "") {
        alert("Invalid input data! Item Name cannot be empty.");
      } else if (!/^[a-zA-Z\s]+$/.test(itemName)) {
        alert("Invalid input data! Item Name should contain only letters and spaces.");
      } else {
        addRow(itemName, category, quantity);
        // Clear input fields after adding the item
        $("#itemName").val("");
        $("#quantity").val("");
      }
    });
  
    // Event handler for delete button
    $(document).on("click", ".delete-btn", function() {
      $(this).closest("tr").remove();
    });
  
    // Event handler for withdraw button
    $(document).on("click", ".withdraw-btn", function() {
      var row = $(this).closest("tr");
      var quantity = parseInt(row.find("td:nth-child(4)").text());
      var withdrawalAmount = parseInt(prompt("Enter withdrawal quantity:", quantity));
      if (!isNaN(withdrawalAmount) && withdrawalAmount <= quantity && withdrawalAmount > 0) {
        row.find("td:nth-child(4)").text(quantity - withdrawalAmount);
        alert("Withdrawal successful!");
      } else {
        alert("Invalid withdrawal amount!");
      }
    });
  
    // Event handler for add button
    $(document).on("click", ".add-btn", function() {
      var row = $(this).closest("tr");
      var quantity = parseInt(row.find("td:nth-child(4)").text());
      var addAmount = parseInt(prompt("Enter quantity to add:", ""));
      if (!isNaN(addAmount) && addAmount > 0) {
        row.find("td:nth-child(4)").text(quantity + addAmount);
        alert("Items added successfully!");
      } else {
        alert("Invalid quantity to add!");
      }
    });
  });
</script>
</body>
</html>
