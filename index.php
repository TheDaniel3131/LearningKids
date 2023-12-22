<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Subjects for Kids to Learn!">
    <meta name="keywords" content="learning, learn, LearningKids, fun, math, science, english, educational, education, free">
    <meta name="author" content="DP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="120">
    <title>Homepage | Learning Kids</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        html, body{
            max-width: 100%;
            overflow-x: hidden; /* to get rid of the big column white space on the right side */
        }

        .main-header p{
            color: black;
        }

        /* Main Header */
        .main-header {
            background-image: url('assets/images/header-background.jpg'); /* Add a suitable background image */
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
            /* color: white; */
            text-align: center;
            padding: 75px 0;

        }

        .header-content h1 {
            font-size: 4.5em;
            font-weight: 850;
            margin-bottom: 20px;
            color: #DDF2FD;
        }

        .header-content p {
            font-size: 1.2em;
            margin-bottom: 25px;
            color: #164863;
            /* Remove the background-color and letter-spacing from here */
        }

        .header-content p .highlight {
            font-weight: 650;
            letter-spacing: 5.5px;
            background-color: #9BBEC8;
            padding: 0.2em 0.4em; /* Add padding to create space around the text */
        }

        .explore-button {
            background-color: #427D9D;
            color: #DDF2FD;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 15px;
            font-size: 1.5em;
            font-weight: 550;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: background-color 0.3s;
        }

        .explore-button:hover {
            background-color: #35aadc;
        }

        /* Subjects Section */
        .subjects-section h2{
            font-size: 30px;
            letter-spacing: 0.5px;
        }

        /* Subjects Section */
        .subjects-section {
            padding: 50px 0px 35px 0px;
            text-align: center;
            background-color: #DDE6ED;
        }

        .subjects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Three columns for larger screens */
            gap: 40px; /* Set the gap between grid items */
            padding: 40px 5%; /* Use percentage for responsive padding */
            margin: 0 auto; /* Center the grid */
            margin-top: 25px;
            /* background-color: #164863; */
        }

        .subjects-grid h3 {
            font-size: 1.5em; /* Larger font size for subject headers */
            color: #164863; /* Color for headers */
            padding: 10px 0; /* Space above and below the header */
        }

        /* Subjects Figure and Figcaption Styles */
        .subjects-grid figure {
            margin: auto; /* Center the figure element */
            text-align: center; /* Center the caption and header */
            max-width: 400px; /* Adjust the size of the boxes */
        }

        .subjects-grid img {
            width: 100%; /* Make the image fill the container */
            height: auto; /* Maintain aspect ratio */
            border-radius: 5px; /* Optional: adds rounded corners to the images */
            margin-bottom: 15px; /* Space between image and header */
        }

        .subjects-grid figcaption {
            font-size: 0.7em; /* Adjusted font size for caption */
            color: #333; /* Caption text color */
            padding: 5px; /* Padding around the caption */
            background-color: #f8f8f8; /* Background color for caption */
            border-radius: 0 0 5px 5px; /* Rounded corners at the bottom */
        }

        .subject {
            background-color: #f8f8f8;
            padding: 20px;
            width: 100%;
            border-radius: 5px;
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            color: #333;
            font-size: 1.5em;
        }

        .subject:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        /* Responsive design for smaller screens */
        @media screen and (max-width: 768px) {
            .subjects-grid {
                grid-template-columns: repeat(1, 1fr); /* One column for smaller screens */
                gap: 15px;
                padding: 0 3%; /* Smaller padding on smaller screens */
            }
        }

        /* For medium screens (e.g., tablets) */
        @media screen and (max-width: 1213px) {
            .subjects-grid {
                grid-template-columns: repeat(2, 1fr); /* Two columns */
                gap: 45px; /* Adjust gap for medium screens */
                padding: 0 4%; /* Adjust padding for medium screens */
            }
        }

        /* For smaller screens (e.g., large phones) */
        @media screen and (max-width: 1024px) {
            .subjects-grid {
                grid-template-columns: repeat(1, 1fr); /* One column */
                gap: 20px; /* Adjust gap for small screens */
                padding: 0 3%; /* Adjust padding for small screens */
            }
        }
    </style>
</head>
<?php require 'guest_navbar.php'?>
<body>
    <header class="main-header">
        <div class="container header-content">
            <h1>Welcome To <u style="color: #CDF5FD;">Learning Kids</u></h1>
            <p><span class="highlight">Explore, Learn, and Have Fun During Learning.</span></p>
            <br><br>
            <a href="#subjects" class="explore-button">Explore Subjects</a>
        </div>
    </header>

    <section id="subjects" class="subjects-section">
        <div class="container">
            <h2>Learn New Knowledge | Have Fun While Learning | Free, Informative & Educational Content</h2>
            <div class="subjects-grid">
                <figure class="subject math">
                    <a href="subjects/math.php">
                        <img src="assets/images/math-image.png" alt="Math">
                    </a>
                    <h3>Math</h3>
                    <figcaption>Easy and fun math lessons! You will learn basic mathematic skills such as addition, subtraction, multiplication, and division.</figcaption>
                </figure>
                <figure class="subject science">
                    <a href="subjects/science.php">
                        <img src="assets/images/science-image.png" alt="Science">
                    </a>
                    <h3>Science</h3>
                    <figcaption>Discover the wonders of science! Explore various scientific concepts and conduct exciting experiments.</figcaption>
                </figure>
                <figure class="subject english">
                    <a href="subjects/english.php">
                        <img src="assets/images/english-image.png" alt="English">
                    </a>
                    <h3>English</h3>
                    <figcaption>Improve your English language skills! Learn grammar, vocabulary, and enhance your reading and writing abilities.</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <?php include 'footer.php'?>

</body>



</html>