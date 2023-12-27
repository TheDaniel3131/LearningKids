<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English | LearningKids</title>
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
        <h2>Reading Comprehension Quiz!</h2>
        <form action="checking_exer1.php" method="post">
            <div class="question" id="question1">1. Who is the author of "Pride and Prejudice"?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer1" value="a">
                    <label for="a">A. Jane Austen</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" value="b">
                    <label for="b">B. William Shakespeare</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer1" value="c">
                    <label for="c">C. Charles Dickens</label>
                </div>
            </div>

            <div class="question" id="question2">2. Which novel is written by J.R.R. Tolkien?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer2" value="a">
                    <label for="a">A. To Kill a Mockingbird</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer2" value="b">
                    <label for="b">B. The Lord of the Rings</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer2" value="c">
                    <label for="c">C. 1984</label>
                </div>
            </div>

            <div class="question" id="question3">3. Who is the protagonist in "The Great Gatsby"?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer3" value="a">
                    <label for="a">A. Jay Gatsby</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer3" value="b">
                    <label for="b">B. Holden Caulfield</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer3" value="c">
                    <label for="c">C. Atticus Finch</label>
                </div>
            </div>

            <div class="question" id="question4">4. Which novel is written by Harper Lee?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer4" value="a">
                    <label for="a">A. Pride and Prejudice</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer4" value="b">
                    <label for="b">B. To Kill a Mockingbird</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer4" value="c">
                    <label for="c">C. The Catcher in the Rye</label>
                </div>
            </div>

            <div class="question" id="question5">5. Who is the author of "1984"?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer5" value="a">
                    <label for="a">A. George Orwell</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer5" value="b">
                    <label for="b">B. F. Scott Fitzgerald</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer5" value="c">
                    <label for="c">C. Ernest Hemingway</label>
                </div>
            </div>

            <div class="question" id="question6">6. Which novel is written by F. Scott Fitzgerald?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer6" value="a">
                    <label for="a">A. The Great Gatsby</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer6" value="b">
                    <label for="b">B. Moby-Dick</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer6" value="c">
                    <label for="c">C. The Catcher in the Rye</label>
                </div>
            </div>

            <div class="question" id="question7">7. Who is the author of "To Kill a Mockingbird"?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer7" value="a">
                    <label for="a">A. Harper Lee</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer7" value="b">
                    <label for="b">B. J.D. Salinger</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer7" value="c">
                    <label for="c">C. George Orwell</label>
                </div>
            </div>

            <div class="question" id="question8">8. Which novel is written by J.D. Salinger?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer8" value="a">
                    <label for="a">A. The Great Gatsby</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer8" value="b">
                    <label for="b">B. The Catcher in the Rye</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer8" value="c">
                    <label for="c">C. 1984</label>
                </div>
            </div>

            <div class="question" id="question9">9. Who is the author of "Moby-Dick"?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer9" value="a">
                    <label for="a">A. Herman Melville</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer9" value="b">
                    <label for="b">B. Mark Twain</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer9" value="c">
                    <label for="c">C. Emily Brontë</label>
                </div>
            </div>

            <div class="question" id="question10">10. Which novel is written by Emily Brontë?</div>
            <div class="options">
                <div class="option">
                    <input type="radio" name="answer10" value="a">
                    <label for="a">A. Wuthering Heights</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer10" value="b">
                    <label for="b">B. Pride and Prejudice</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer10" value="c">
                    <label for="c">C. Jane Eyre</label>
                </div>
            </div>
            <button class="submit-btn" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>