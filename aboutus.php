<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/icon/icon.png">
    <title>About Us | LearningKids</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }

        .about-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 50px;
            border-radius: 8px;
        }

        h1 {
            color: #007bff;
            text-align: center;
            margin-top: 30px;
            font-size: 3.5em;
            font-weight: 950;   
        }

        .image-container {
            text-align: center;
            margin-bottom: 35px;
        }

        .image-container img {
            max-width: 50%;
            height: auto;
            border-radius: 8px;
        }

        .text-container {
            margin-bottom: 20px;
        }

        .text-container p {
            color: #333;
            line-height: 1.6;
            justify-content: center;    
            text-align: justify;
            font-size: 1.2em;
        }

        @media (max-width: 800px) {
            .about-container {
                padding: 30px;
            }

            h1 {
                font-size: 2.5em;
            }

            .image-container img {
                max-width: 80%;
            }

            .text-container p {
                font-size: 1em;
            }
        }

        @media (max-width: 600px) {
            .about-container {
                padding: 20px;
            }

            h1 {
                font-size: 2em;
            }

            .image-container img {
                max-width: 100%;
            }

            .text-container p {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<?php include 'logged_navbar.php'; ?>
<body>
    <div class="about-container">
        <h1>About Us</h1>
        <br>
        <div class="image-container">
            <img src="assets/images/aboutus1.png" alt="Image 1">
        </div>
        <div class="text-container">
            <p>Welcome to LearningKids! We are a modern and professional educational website dedicated to providing high-quality learning resources for kids.</p>
            <br>
            <p>Our mission is to make learning fun and engaging for children of all ages. Through interactive lessons, games, and activities, kids can explore various subjects and develop their skills in a playful and enjoyable way.</p>
            <br>
            <p>Join us on this exciting learning journey and unlock your child's full potential!</p>
            <br>
        </div>
        <hr><br><br><br>
        <div class="image-container">
            <img src="assets/images/aboutus2.png" alt="Image 2">
        </div>
        <div class="text-container">
            <p>LearningKids was founded in 2021 by a group of passionate educators who wanted to make learning fun and accessible for kids everywhere.</p>
            <br>
            <p>Our team consists of experienced teachers, curriculum designers, and developers who are dedicated to creating high-quality educational content for children.</p>
            <br>
            <p>We believe that every child deserves a chance to learn and grow. That's why we offer our resources for free so that all kids can have access to quality education regardless of their background or financial situation.</p>
            <br>
            <p>Our goal is to provide children with the tools they need to succeed in school and life. We hope that you will join us on this journey by exploring our website and sharing it with your friends!</p>
            <br>
            <p>Ready to embark on an exciting learning journey with us? Let's nurture and unlock your child's full potential together!</p>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
