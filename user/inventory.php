<?php
require('../include/dbConnect.php');

// Pagination variables
$rows_per_page = 10;
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($current_page - 1) * $rows_per_page;

// Fetch data from the "inventory" table with pagination
$sql = "SELECT * FROM inventory LIMIT $start, $rows_per_page";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .table-container {
            width: 90%;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table-container h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn {
            background-color: rgb(17, 7, 156);
            border: none;
            color: white;
            border-radius: 5px;
            height: 2rem;
            width: 4.5rem;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .pagination {
            text-align: center;
            margin-top: 10px;
        }

        .pagination a {
            display: inline-block;
            padding: 5px 10px;
            margin: 0 2px;
            border: 1px solid #ccc;
            border-radius: 3px;
            text-decoration: none;
            color: #333;
        }

        .pagination a.active {
            background-color: #007bff;
            color: #fff;
        }

        .pagination a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <!-- Your HTML content -->
    <a href="index.php"><button class="btn">Back</button></a>
    <div class="container"> 
        <div class="table-container coach">
            <h2>College Sports Inventory Management</h2>
            <table>
                <thead>
                    <tr>
                        <th>Item Id</th>
                        <th>Item Name</th>
                        <th>Category</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Check if there are any rows returned
                    if (mysqli_num_rows($result) > 0) {
                        // Output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["item_name"]; ?></td>
                                <td><?php echo $row["category"]; ?></td>
                                <td><?php echo $row["quantity"]; ?></td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='4'>No items found in inventory</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- Pagination links -->
            <div class="pagination">
                <?php
                // Count total number of rows in the inventory table
                $sql_count = "SELECT COUNT(*) AS total FROM inventory";
                $result_count = mysqli_query($conn, $sql_count);
                $row_count = mysqli_fetch_assoc($result_count);
                $total_pages = ceil($row_count['total'] / $rows_per_page);

                // Previous page button
                if ($current_page > 1) {
                    echo "<a href='?page=".($current_page - 1)."'>Previous</a>";
                }

                // Page numbers
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='?page=".$i."'".($current_page == $i ? " class='active'" : "").">".$i."</a>";
                }

                // Next page button
                if ($current_page < $total_pages) {
                    echo "<a href='?page=".($current_page + 1)."'>Next</a>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
