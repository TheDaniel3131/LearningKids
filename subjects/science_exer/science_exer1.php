<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science | LearningKids</title>
    <link rel="icon" href="../../assets/icon/icon.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            background-image: linear-gradient(to bottom right, #ffcc00, #ff6699);
        }
        
        .quiz-container {
            max-width: 800px;
            margin: 8em auto;
            margin-bottom: 8em;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 2em;
            text-align: center;
            text-decoration: underline;
        }
        
        .question {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .options {
            margin-bottom: 3em;
        }
        
        .option {
            margin-bottom: 5px;
        }
        
        input[type="radio"] {
            margin-right: 10px;
        }
        
        label {
            font-size: 19px;
        }
        
        .submit-btn {
            display: block;
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        
        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="quiz-container">
        <h2>Solar System Science Quiz!</h2>
        
        <form action="checking_exer1.php" method="post">
        
            <div class="question" id="question1">1. What is the largest planet in our solar system?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer1" value="a">
                    <label for="a">A. Jupiter</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" value="b">
                    <label for="b">B. Saturn</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" value="c">
                    <label for="c">C. Earth</label>
                </div>
            </div>
            
            <div class="question" id="question2">2. Which planet is known as the "Red Planet"?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer2" value="a">
                    <label for="a">A. Mars</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer2" value="b">
                    <label for="b">B. Venus</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer2" value="c">
                    <label for="c">C. Mercury</label>
                </div>
            </div>
            
            <div class="question" id="question3">3. Which planet is closest to the Sun?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer3" value="a">
                    <label for="a">A. Mercury</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer3" value="b">
                    <label for="b">B. Venus</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer3" value="c">
                    <label for="c">C. Earth</label>
                </div>
            </div>
            
            <div class="question" id="question4">4. What is the smallest planet in our solar system?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer4" value="a">
                    <label for="a">A. Mercury</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer4" value="b">
                    <label for="b">B. Mars</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer4" value="c">
                    <label for="c">C. Earth</label>
                </div>
            </div>
            
            <div class="question" id="question5">5. Which planet has the most moons?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer5" value="a">
                    <label for="a">A. Jupiter</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer5" value="b">
                    <label for="b">B. Saturn</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer5" value="c">
                    <label for="c">C. Earth</label>
                </div>
            </div>
            
            <div class="question" id="question6">6. Which planet is known for its beautiful rings?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer6" value="a">
                    <label for="a">A. Saturn</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer6" value="b">
                    <label for="b">B. Neptune</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer6" value="c">
                    <label for="c">C. Uranus</label>
                </div>
            </div>
            
            <div class="question" id="question7">7. Which planet is known as the "Blue Planet"?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer7" value="a">
                    <label for="a">A. Earth</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer7" value="b">
                    <label for="b">B. Venus</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer7" value="c">
                    <label for="c">C. Mars</label>
                </div>
            </div>
            
            <div class="question" id="question8">8. Which planet is known as the "Giant Planet"?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer8" value="a">
                    <label for="a">A. Jupiter</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer8" value="b">
                    <label for="b">B. Uranus</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer8" value="c">
                    <label for="c">C. Neptune</label>
                </div>
            </div>
            
            <div class="question" id="question9">9. Which planet is known as the "Morning Star"?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer9" value="a">
                    <label for="a">A. Venus</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer9" value="b">
                    <label for="b">B. Mercury</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer9" value="c">
                    <label for="c">C. Mars</label>
                </div>
            </div>
            
            <div class="question" id="question10">10. Which planet is known as the "Evening Star"?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer10" value="a">
                    <label for="a">A. Venus</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer10" value="b">
                    <label for="b">B. Mercury</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer10" value="c">
                    <label for="c">C. Mars</label>
                </div>
            </div>
            
            <button class="submit-btn" type="submit">Submit</button>
        
        </form>
        
    </div>
</body>
</html>