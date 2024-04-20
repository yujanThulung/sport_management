<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form to Insert Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      margin-top: 0;
    }

    form {
      display: grid;
      grid-gap: 10px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2>Insert Data</h2>
    <form method="post" action="../control/players.php">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="phone">Phone Number:</label>
      <input type="text" id="phone" name="phone" required>

      <label for="game">Game:</label>

      
      <select id="game" name="game">
        <option value="">Select a game</option>
        <?php
        require('../include/dbConnect.php');
        // Fetch data from the "event" table
        $sql = "SELECT DISTINCT event_name FROM event";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          // Output data of each row
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row["event_name"] . "'>" . $row["event_name"] . "</option>";
          }
        }
        ?>
      </select>

      <label for="gender">Gender:</label>
      <select id="gender" name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
      </select>

      <label for="team">Team:</label>
      <select id="team" name="team">
        <option value="BCA">BCA</option>
        <option value="BBS">BBS</option>
        <option value="BIM">BIM</option>
        <option value="BHM">BHM</option>
        <!-- Add more faculties as needed -->
      </select>

      <button type="submit">Submit</button>
    </form>
  </div>

</body>

</html>