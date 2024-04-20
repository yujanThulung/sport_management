<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            /* Allow flex items to wrap to the next row */
            justify-content: center;
            /* Center the content horizontally */
            margin-top: 20px;
        }

        .table-container {
            width: 90%;
            /* Make each table container take up 90% of the width */
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            /* Added margin for spacing between table containers */
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

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn {
            background-color: rgb(227, 15, 46);
            border: none;
            color: white;
            border-radius: 5px;
            height: 2rem;
            width: 4.5rem;
        }

        nav {
            display: flex;
            justify-content: right;
        }

        nav ul {
            display: flex;
            flex-direction: row;
            gap: 3rem;
        }

        li a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <a href="result.php">
                <li>Result</li>
            </a>
            <a href="">
                <li>Shedule</li>
            </a>
            <a href="gameDetail.php ">
                <li>TeamDetail</li>
            </a>
            <a href="javascript:history.back()"><button class="btn">Back</button></a>
        </ul>
    </nav>
    <div class="container">
        <div class="table-container coach">
            <h2>Coach Detail</h2>
            <table>
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Contact No</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Coach details will be added dynamically -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Male</td>
                        <td>1234567890</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Doe</td>
                        <td>Female</td>
                        <td>9876543210</td>
                    </tr>
                </tbody>
            </table>
        </div>

        
        <div class="table-container player">
    <h2>Player Detail</h2>
    <table>
        <thead>
            <tr>
                <th>Serial No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Game</th>
                <th>Contact No</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include database connection
            require('../include/dbConnect.php');

            // Fetch player details from the database
            $sql = "SELECT * FROM players WHERE game = 'Basketball'";

            $result = mysqli_query($conn, $sql);

            // Check if there are any records
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                $serial = 1;
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td><?php echo $serial++; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td><?php echo $row["game"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                    </tr>
            <?php
                }
            } else {
            ?>
                <tr>
                    <td colspan="5">No records found</td>
                </tr>
            <?php
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>


    </div>
</body>

</html>