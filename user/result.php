<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .btn {
            background-color: rgb(227, 15, 46);
            border: none;
            color: white;
            border-radius: 5px;
            height: 2rem;
            width: 4.5rem;
            margin-right: 4rem;
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

        .resulttable {
            margin-top: 20px;
        }

        .resulttable table {
            width: 60%;
            border-collapse: collapse;
        }

        .resulttable th,
        .resulttable td {
            padding: 6px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .resulttable th {
            background-color: #f2f2f2;
        }

        .resulttable tbody td:last-child {
            text-align: center;
        }

        .resulttable tbody td:last-child img {
            width: 20px;
            height: auto;
        }

        .resulttable tbody td:last-child img:hover {
            cursor: pointer;
        }

        .resulttable tbody td input[type="date"] {
            width: 100%;
            padding: 4px;
            box-sizing: border-box;
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
    <center>
        <h1><b>Results</b></h1>
        <div class="resulttable">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Club Name</th>
                        <th>Medal</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table body content will be added dynamically -->
                </tbody>
            </table>
        </div>
    </center>
</body>

</html>