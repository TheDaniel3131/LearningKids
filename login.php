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

// Login form handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, redirect to the dashboard or home page
        header("Location: logged_index.php");
        exit();
    } else {
        // Invalid credentials, show an error message
        $error = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | LearningKids</title>
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

    .login {
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
    <section class="login">
        <h1>Login</h1>
        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
        <form method="POST" id="forming" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="signup.php">Register</a></p>
        <p>Forgot your password? <a href="forgot_password.php">Reset Password</a></p>
    </section>
</body>
</html>