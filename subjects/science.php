<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science | LearningKids</title>
    <link rel="icon" href="../assets/icon/icon.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }
        .science-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(to bottom right, #4a90e2, #8e44ad);
        }
        .box {
            width: 300px;
            height: 200px;
            margin: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .box:hover {
            transform: scale(1.05);
        }
        .box h2 {
            margin: 0;
            font-size: 40px;
            font-weight: bold;
            text-align: center;
            color: #333333;
            margin-bottom: 25px;
        }
        .box p {
            margin: 0;
            font-size: 18px;
            text-align: center;
            color: #666666;
        }
        .box a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    <div class="science-container">
        <div class="box">
            <a href="./science_exer/science_exer1.php" target="_blank">
                <h2>Solar System</h2>
                <p>Learn about the planets and the universe.</p>
            </a>
        </div>
        <div class="box">
            <a href="./science_exer/science_exer2.php" target="_blank">
                <h2>Biology</h2>
                <p>Explore the fascinating world of living organisms.</p>
            </a>
        </div>
    </div>
</body>
</html>