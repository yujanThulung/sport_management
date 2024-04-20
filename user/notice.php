<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .notice {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .notice h2 {
            margin-top: 0;
        }

        .notice p {
            margin: 0;
        }

        .notice p.date {
            text-align: right;
            font-style: italic;
            color: #666;
        }

        .btn {
            background-color: rgb(227, 15, 46);
            border: none;
            color: white;
            border-radius: 5px;
            height: 2rem;
            width: 4.5rem;
            right: 4rem;
        }

        nav {
            justify-content: right;
            display: flex;
            margin-right: 4rem;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <nav>
        <a href="javascript:history.back()"><button class="btn">Back</button></a>
    </nav>
    <div class="container">
        <h1>Notice Board</h1>
        <div class="notice">
            <a href="noticeDetail.php">
                <h2>Important Announcement</h2>
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at ex eu nisi tempus tempus. Vivamus
                auctor mauris et enim pharetra, vitae efficitur turpis accumsan.</p>
            <p class="date">Publish Date: April 11, 2024</p>
        </div>
    </div>
</body>

</html>