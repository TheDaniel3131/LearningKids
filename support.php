<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support | LearningKids</title>
    <link rel="icon" href="assets/icon/icon.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .sp-container {
            max-width: 666px;
            margin: 0 auto;
            padding: 55px;
            background-color: #fff;
            margin-top: 5rem;
            margin-bottom: 7rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sp-container h1 {
            text-align: center;
            color: #333;
            font-size: 2.5em;
            text-decoration: none;
        }

        form {
            margin-top: 20px;
        }

        .sp-container label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.2em;
            color: #333;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.2em;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        /* Media Queries */
        @media screen and (max-width: 768px) {
            .sp-container {
                padding: 30px;
            }
        }

        @media screen and (max-width: 480px) {
            .sp-container {
                padding: 20px;
            }
        }
    </style>
</head>
<?php include 'logged_navbar.php'; ?>
<body>
    <div class="sp-container">
        <h1>Contact Us</h1><br><hr><br>
        <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
<?php include 'footer.php'; ?>
</body>
</html>