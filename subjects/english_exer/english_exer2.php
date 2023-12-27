<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grammar | LearningKids</title>
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
        <h2>Grammar Quiz!</h2>
        
        <form action="checking_exer2.php" method="post">
        
            <div class="question" id="question1">1. What is the correct form of the verb "to be" in the present tense for the pronoun "I"?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer1" value="a">
                    <label for="a">A. am</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" value="b">
                    <label for="b">B. is</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" value="c">
                    <label for="c">C. are</label>
                </div>
            </div>
            
            <div class="question" id="question2">2. Which sentence is grammatically correct?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer2" value="a">
                    <label for="a">A. I goed to the store.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer2" value="b">
                    <label for="b">B. I goed to the store yesterday.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer2" value="c">
                    <label for="c">C. I went to the store.</label>
                </div>
            </div>
            
            <div class="question" id="question3">3. Which sentence contains a subject and a verb?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer3" value="a">
                    <label for="a">A. The cat is sleeping.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer3" value="b">
                    <label for="b">B. Running in the park.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer3" value="c">
                    <label for="c">C. Beautiful flowers.</label>
                </div>
            </div>
            
            <div class="question" id="question4">4. Which sentence is an example of a compound sentence?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer4" value="a">
                    <label for="a">A. I like to read books.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer4" value="b">
                    <label for="b">B. She went to the store and bought some groceries.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer4" value="c">
                    <label for="c">C. The dog barks loudly.</label>
                </div>
            </div>
            
            <div class="question" id="question5">5. Which word is a pronoun?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer5" value="a">
                    <label for="a">A. Run</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer5" value="b">
                    <label for="b">B. Beautiful</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer5" value="c">
                    <label for="c">C. They</label>
                </div>
            </div>
            
            <div class="question" id="question6">6. Which sentence is written in the passive voice?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer6" value="a">
                    <label for="a">A. The cat chased the mouse.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer6" value="b">
                    <label for="b">B. The mouse was chased by the cat.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer6" value="c">
                    <label for="c">C. The mouse and the cat played together.</label>
                </div>
            </div>
            
            <div class="question" id="question7">7. Which sentence is an example of a run-on sentence?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer7" value="a">
                    <label for="a">A. I like to read books.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer7" value="b">
                    <label for="b">B. She went to the store and bought some groceries.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer7" value="c">
                    <label for="c">C. I like to read books I also enjoy watching movies.</label>
                </div>
            </div>
            
            <div class="question" id="question8">8. Which sentence is an example of a fragment?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer8" value="a">
                    <label for="a">A. I like to read books.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer8" value="b">
                    <label for="b">B. She went to the store and bought some groceries.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer8" value="c">
                    <label for="c">C. Running in the park.</label>
                </div>
            </div>
            
            <div class="question" id="question9">9. Which sentence is an example of a complex sentence?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer9" value="a">
                    <label for="a">A. I like to read books.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer9" value="b">
                    <label for="b">B. She went to the store and bought some groceries.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer9" value="c">
                    <label for="c">C. I will go to the park if it stops raining.</label>
                </div>
            </div>
            
            <div class="question" id="question10">10. Which sentence is an example of a compound-complex sentence?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer10" value="a">
                    <label for="a">A. I like to read books.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer10" value="b">
                    <label for="b">B. She went to the store and bought some groceries.</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer10" value="c">
                    <label for="c">C. I will go to the park if it stops raining, and I will bring an umbrella.</label>
                </div>
            </div>
            
            <button class="submit-btn" type="submit">Submit</button>
        
        </form>
        
    </div>
</body>
</html>