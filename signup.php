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

// Registration form handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address. Please enter a valid email.";
    } else {
        // Check if email already exists in the database
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $error = "Email address already exists. Please choose a different email.";
        } else {
            // Validate password
            if (strlen($password) > 16 || !preg_match("/[A-Z]/", $password) || !preg_match("/[!@#$%^&*()\-_=+{};:,<.>]/", $password)) {
                $error = "Invalid password. Password must be at most 16 characters long and contain at least one capital letter and one symbol.";
            } else {
                // Insert the user into the database
                $sql = "INSERT INTO users (email, password, role) VALUES ('$email', '$password', '$role')";
                if ($conn->query($sql) === TRUE) {
                    // Registration successful, redirect to the login page
                    header("Location: login.php");
                    exit();
                } else {
                    // Registration failed, show an error message
                    $error = "Registration failed. Please try again.";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | LearningKids</title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 95vh;
    }

    .signup {
        text-align: center;
        align-items: center;
        justify-content: center;
    }

    h1 {
        color: #333;
        text-align: center;
        font-weight: 900;
        font-size: 40px;
    }

    form {
        width: 100%;
        position: relative;
        max-width: 500px;
        padding: 35px 25px 35px 25px;
        background-color: #fff;
        border-radius: 16px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    #forming{
        text-align: center;
        align-items: center;
        justify-content: center;
        margin-right: 35px;
        right: 7.27%;
        margin-bottom: 35px;
    }
    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }


    /* Adjustments for the "Role" field */
    label[for="role"] {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    select[name="role"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 25px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;    
        cursor: pointer;
        border-radius: 16px;
    }

    input[type="submit"]:hover {
        background-color: #005cbf;
    }

    p {
        margin-top: 10px;
        color: #888;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .error {
        color: #d9534f;
        margin-bottom: 10px;
    }
</style>
<body>
<section class="signup">
    <h1>Sign Up</h1>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" id="forming" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[!@#$%^&*()\-_=+{};:,<.>]).{1,16}" title="Password must be at most 16 characters long and contain at least one capital letter and one symbol." required><br><br>
        <label for="role">Role:</label>
        <select name="role" required>
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
        </select><br><br><br>
        <input type="submit" value="Sign Up">
    </form>
</section>
</body>
</html>