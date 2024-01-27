<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include 'db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = isset($_POST['username']) ? mysqli_real_escape_string($conn, $_POST['username']) : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    if (empty($username) || empty($password)) {
        $error_message = "Username and password are required.";
    } else {
        $query = "SELECT * FROM register WHERE username = ?";
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            $stmt->close();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $_SESSION["user_id"] = $user['id'];
                    header("Location: home.php");
                    exit();
                } else {
                    $error_message = "Invalid password.";
                }
            } else {
                $error_message = "User not found for the provided username.";
            }
        } else {
            $error_message = "Login failed. Please try again.";
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Form</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-image: url("gallery-final.jpg");
        background-size: cover;
    }

        body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-image: url("gallery-final.jpg");
        background-size: cover;
        filter: blur(8px);
        -webkit-filter: blur(8px);
    }

    .login-container {
        
        border-radius: 8px;
        overflow: hidden;
        width: 500px;
        padding: 20px;
        box-sizing: border-box;
    }

        .login-container h2 {
            text-align: center;
            color: white;
            font-size: 40px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            color: white;
            font-size: 15px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 14px;
            color: #000;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 100;
            color: white;
            font-size: 20px;

        }

        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            height: 40px;
        }
        .pass{
            font-size: 18px;
        }
        .done{
            color: white;
            font-size: 20px;
        }
    </style>
</head>
<body>

<div class="login-container">
<h2>Login Here!</h2>
<form class="login-form" action="home.php" method="post">
        <div class="form-group">
            <label for="username">Email</label>
            <input type="text" id="username" name="username" required>

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

        </div>
        <div class="pass">
        <a href="register.php">Forgot Password</a>
        </div>
        <div class="form-group">
        <input type="submit" name="login" value="Login">
        </div>
        
    </form>
    <p class="done">Don't have an account? <a href="register.php">Register here</a>.</p>
</div>

</body>
</html>

