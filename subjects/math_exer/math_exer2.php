<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geometry | LearningKids</title>
    <link rel="icon" href="../../assets/icon/icon.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f2ff;
            background-image: linear-gradient(to bottom right, #00ff00, #0000ff);
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
        <h2>Geometry Quiz!</h2>
        
        <form action="checking_exer2.php" method="post">
        
            <div class="question" id="question1">1. What is the formula to calculate the area of a rectangle?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer1" value="a">
                    <label for="a">A. length * width</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" value="b">
                    <label for="b">B. base * height</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" value="c">
                    <label for="c">C. π * radius^2</label>
                </div>
            </div>
            
            <div class="question" id="question2">2. Which shape has all sides equal in length?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer2" value="a">
                    <label for="a">A. Triangle</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer2" value="b">
                    <label for="b">B. Square</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer2" value="c">
                    <label for="c">C. Rectangle</label>
                </div>
            </div>
            
            <div class="question" id="question3">3. What is the formula to calculate the circumference of a circle?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer3" value="a">
                    <label for="a">A. 2 * π * radius</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer3" value="b">
                    <label for="b">B. π * radius^2</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer3" value="c">
                    <label for="c">C. length * width</label>
                </div>
            </div>
            
            <div class="question" id="question4">4. What is the formula to calculate the volume of a cylinder?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer4" value="a">
                    <label for="a">A. π * radius^2 * height</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer4" value="b">
                    <label for="b">B. base * height</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer4" value="c">
                    <label for="c">C. length * width * height</label>
                </div>
            </div>
            
            <div class="question" id="question5">5. What is the formula to calculate the area of a triangle?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer5" value="a">
                    <label for="a">A. base * height</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer5" value="b">
                    <label for="b">B. length * width</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer5" value="c">
                    <label for="c">C. 0.5 * base * height</label>
                </div>
            </div>
            
            <div class="question" id="question6">6. What is the formula to calculate the perimeter of a rectangle?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer6" value="a">
                    <label for="a">A. 2 * (length + width)</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer6" value="b">
                    <label for="b">B. 2 * π * radius</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer6" value="c">
                    <label for="c">C. base * height</label>
                </div>
            </div>
            
            <div class="question" id="question7">7. What is the formula to calculate the volume of a sphere?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer7" value="a">
                    <label for="a">A. 4/3 * π * radius^3</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer7" value="b">
                    <label for="b">B. 2 * (length + width)</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer7" value="c">
                    <label for="c">C. base * height</label>
                </div>
            </div>
            
            <div class="question" id="question8">8. What is the formula to calculate the area of a circle?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer8" value="a">
                    <label for="a">A. π * radius^2</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer8" value="b">
                    <label for="b">B. 2 * (length + width)</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer8" value="c">
                    <label for="c">C. base * height</label>
                </div>
            </div>
            
            <div class="question" id="question9">9. What is the formula to calculate the perimeter of a triangle?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer9" value="a">
                    <label for="a">A. side1 + side2 + side3</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer9" value="b">
                    <label for="b">B. 2 * (length + width)</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer9" value="c">
                    <label for="c">C. base * height</label>
                </div>
            </div>
            
            <div class="question" id="question10">10. What is the formula to calculate the volume of a cone?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer10" value="a">
                    <label for="a">A. 1/3 * π * radius^2 * height</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer10" value="b">
                    <label for="b">B. 2 * (length + width)</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer10" value="c">
                    <label for="c">C. base * height</label>
                </div>
            </div>
            
            <button class="submit-btn" type="submit">Submit</button>
        
        </form>
        
    </div>
</body>
</html>