<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .game-container {
            width: 220px;
            /* Increased width to accommodate the name below */
            height: 220px;
            /* Increased height to make the image slightly more square */
            overflow: hidden;
            border: 2px solid black;
            box-sizing: border-box;
            /* Ensures that border width is included in width and height */
            text-align: center;
            /* Center-align the image name */
        }

        .game-container img {
            width: 100%;
            height: 80%;
            /* Adjusted height to leave space for the name */
            object-fit: cover;
        }

        .game-container p {
            margin: 0;
            padding: 5px;
            background-color: #f2f2f2;
            /* Background color for the name */
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-items: center;
            align-items: center;
        }

        .lists {
            display: flex;
            justify-items: center;
            align-items: center;
            gap: 4px;
        }

        .btn{
            background-color: rgb(17, 7, 156); 
            border:none; 
            color:white; 
            border-radius:5px;
            height:2rem;
            width: 4.5rem;
        }
    </style>
</head>

<body>
    <main class="main">
        <a href="index.php"><button class="btn">Back</button>
            <div class="container">
                <div>
                    <h1><b><u>GAMES</u></b></h1><br><br>
                </div>
                <div class="lists">
                    <div class="game-container">
                        <a href="gameDetail.php "><img src="img/volleyball.jpg" alt="Volleyball"> </a>
                        <p>VOLLEYBALL</p><br><br><br><br>
                    </div>
                    <div class="game-container">
                        <a href="batminton.php"><img src="img/bbatminton.jpg" alt="Badminton"></a>
                        <p>BADMINTON</p>
                    </div>
                    <div class="game-container">
                        <a href="tableTenis.php"><img src="img/btableten.jpg" alt="Table Tennis"></a>
                        <p>TABLE TENNIS</p>
                    </div>
                    <div class="game-container">
                        <a href="shotput.php"><img src="img/Finalshotput.jpg" alt="Shot Put"></a>
                        <p>SHOT PUT</p>
                    </div>
                    <div class="game-container">
                        <a href="futsal.php"><img src="img/finalfutsal.jpg" alt="Futsal"></a>
                        <p>FUTSAL </p>
                    </div>
                    <div class="game-container">
                        <a href="basketball.php"><img src="img/basketball.jpg" alt="Futsal"></a>
                        <p>BASKETBALL</p>
                    </div>
                </div>
            </div>
    </main>

    <footer>
        <p style="text-align: center;">&copy; 2024 Kathmandu Shiksha Multiple Campus. All rights reserved.</p>
    </footer>
</body>

</html>