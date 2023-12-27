<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learningkids";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize score
    $score = 0;

    // Loop through each question and check the answer
    for ($i = 1; $i <= 10; $i++) {
        $user_answer = isset($_POST["answer$i"]) ? $_POST["answer$i"] : "";
        $id = $i;

        // Prepare and execute the SQL query to get the correct answer
        $stmt = $conn->prepare("SELECT correct_answer FROM english_exer1 WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($correct_answer);
        $stmt->fetch();
        $stmt->close();

        // Debugging values to match answers
        // echo "Question ID: $id, User's Answer: $user_answer, Correct Answer: $correct_answer <br>";

        // Check if the user's answer is correct
        if (strtolower($user_answer) == strtolower($correct_answer)) {
            $score++;
        }
    }

    // Close the database connection
    $conn->close();

    // Display the result
    echo "<h2>Your Quiz Result</h2>";
    echo "<p>You scored $score out of 10!</p>";

    // Output JavaScript code to delay the redirection
    echo "<script>
        setTimeout(function() {
            window.location.href = '../english.php';
        }, 55000); // 55 seconds delay
    </script>";

} else {
    // Delay for 5 seconds
    sleep(5);

    // Redirect to the quiz page if accessed directly
    header("Location: english_exer1.php");
    exit();
}
?>
