<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixtures</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    .fixvolley {
        text-align: center;
    }

    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
   
    <div class="fixvolley">
        <h1><u>Volleyball</u></h1>
        <h2>Fixtures</h2>
        <table id="fixtureTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Team Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table body will be populated dynamically -->
                <?php
        // Establish connection to MySQL server
        $servername = "localhost";
        $username = "root"; // Your MySQL username
        $password = ""; // Your MySQL password
        $dbname = "clz_sportmanagementsystem"; // Name of the database

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch fixture data from the database
        $sql = "SELECT * FROM fixtures";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>" .
                       "<td>" . $row["date"] . "</td>" .
                       "<td>" . $row["time"] . "</td>" .
                       "<td>" . $row["team_name"] . "</td>" .
                       "<td>" .
                         "<button class='edit-btn'>Edit</button>" .
                         "<button class='delete-btn'>Delete</button>" .
                         "<button class='save-btn' style='display: none;'>Save</button>" .
                       "</td>" .
                     "</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
            </tbody>
        </table>
    </div>

    <button id="addFixture">Add Fixture</button>

    <script>
    $(document).ready(function() {
        // Function to add a new row to the table
        function addRow(date, time, teamName) {
            var newRow = "<tr>" +
                "<td contenteditable='true'>" + date + "</td>" +
                "<td contenteditable='true'>" + time + "</td>" +
                "<td contenteditable='true'>" + teamName + "</td>" +
                "<td>" +
                "<button class='edit-btn'>Edit</button>" +
                "<button class='delete-btn'>Delete</button>" +
                "<button class='save-btn' style='display: none;'>Save</button>" +
                "</td>" +
                "</tr>";
            $("#fixtureTable tbody").append(newRow);
        }

        // Function to validate date format
        function isValidDate(dateString) {
            var regexDate = /^\d{4}-\d{2}-\d{2}$/;
            return regexDate.test(dateString);
        }

        // Function to validate time format
        function isValidTime(timeString) {
            var regexTime = /^(0?[1-9]|1[0-2]):[0-5][0-9] (AM|PM)$/i;
            return regexTime.test(timeString);
        }

        // Event handler for the Add Fixture button
        $("#addFixture").click(function() {
            var date = prompt("Enter date (YYYY-MM-DD):");
            var time = prompt("Enter time (HH:MM AM/PM):");
            var teamName = prompt("Enter team name (string or integer):");

            if (date && time && teamName) {
                if (isValidDate(date) && isValidTime(time)) {
                    addRow(date, time, teamName);
                } else {
                    alert(
                        "Invalid date or time format. Please enter date in YYYY-MM-DD format and time in HH:MM AM/PM format.");
                }
            } else {
                alert("Please fill in all fields.");
            }
        });

        // Event handler for edit button
        $(document).on("click", ".edit-btn", function() {
            var row = $(this).closest("tr");
            row.find("td:not(:last-child)").attr("contenteditable", true);
            row.find(".edit-btn, .delete-btn").hide();
            row.find(".save-btn").show();
        });

        // Event handler for save button
        $(document).on("click", ".save-btn", function() {
            var row = $(this).closest("tr");
            row.find("td:not(:last-child)").attr("contenteditable", false);
            row.find(".edit-btn, .delete-btn").show();
            row.find(".save-btn").hide();
        });

        // Event handler for delete button
        $(document).on("click", ".delete-btn", function() {
            $(this).closest("tr").remove();
        });
    });
    </script>
</body>

</html>