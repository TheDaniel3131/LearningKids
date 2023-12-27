<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology | LearningKids</title>
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
        <h2>Biology Quiz!</h2>
        
        <form action="checking_exer2.php" method="post">
        
            <div class="question" id="question1">1. What is the study of living organisms called?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer1" value="a">
                    <label for="a">A. Botany</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" value="b">
                    <label for="b">B. Zoology</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" value="c">
                    <label for="c">C. Biology</label>
                </div>
            </div>
            
            <div class="question" id="question2">2. What is the basic unit of life?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer2" value="a">
                    <label for="a">A. Cell</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer2" value="b">
                    <label for="b">B. Atom</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer2" value="c">
                    <label for="c">C. Molecule</label>
                </div>
            </div>
            
            <div class="question" id="question3">3. Which organ is responsible for pumping blood throughout the body?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer3" value="a">
                    <label for="a">A. Heart</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer3" value="b">
                    <label for="b">B. Brain</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer3" value="c">
                    <label for="c">C. Lungs</label>
                </div>
            </div>
            
            <div class="question" id="question4">4. Which process converts sunlight into chemical energy in plants?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer4" value="a">
                    <label for="a">A. Photosynthesis</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer4" value="b">
                    <label for="b">B. Respiration</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer4" value="c">
                    <label for="c">C. Digestion</label>
                </div>
            </div>
            
            <div class="question" id="question5">5. Which organ system is responsible for removing waste from the body?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer5" value="a">
                    <label for="a">A. Excretory system</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer5" value="b">
                    <label for="b">B. Respiratory system</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer5" value="c">
                    <label for="c">C. Circulatory system</label>
                </div>
            </div>
            
            <div class="question" id="question6">6. Which process involves the breakdown of food into simpler substances?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer6" value="a">
                    <label for="a">A. Digestion</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer6" value="b">
                    <label for="b">B. Absorption</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer6" value="c">
                    <label for="c">C. Assimilation</label>
                </div>
            </div>
            
            <div class="question" id="question7">7. Which organ is responsible for producing insulin?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer7" value="a">
                    <label for="a">A. Pancreas</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer7" value="b">
                    <label for="b">B. Liver</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer7" value="c">
                    <label for="c">C. Kidney</label>
                </div>
            </div>
            
            <div class="question" id="question8">8. Which process involves the exchange of gases between the body and the environment?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer8" value="a">
                    <label for="a">A. Respiration</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer8" value="b">
                    <label for="b">B. Circulation</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer8" value="c">
                    <label for="c">C. Digestion</label>
                </div>
            </div>
            
            <div class="question" id="question9">9. Which organ is responsible for filtering blood and removing waste products?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer9" value="a">
                    <label for="a">A. Kidney</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer9" value="b">
                    <label for="b">B. Liver</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer9" value="c">
                    <label for="c">C. Stomach</label>
                </div>
            </div>
            
            <div class="question" id="question10">10. Which process involves the production of offspring?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer10" value="a">
                    <label for="a">A. Reproduction</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer10" value="b">
                    <label for="b">B. Growth</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer10" value="c">
                    <label for="c">C. Development</label>
                </div>
            </div>
            
            <button class="submit-btn" type="submit">Submit</button>
        
        </form>
        
    </div>
</body>
</html>