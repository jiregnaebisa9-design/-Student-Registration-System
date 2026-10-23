<?php
session_start();
$eroor = "";
if
  ($_SERVER["REQUEST_METHOD]" == "POST"){
    $username =
      $_POST["username"] ?? "";
    $password =
       $_POST["password"] ?? "";
    if($username ==="admin" && $password === "Admin123"){
      $_SESSION["ADMIN"] = $USERNAME;
      header("Location:dashboard.php");
      exit;
    }
    else
    {
      $error = "username orpassword is error;
      }
      }
      >?
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-box {
            background: white;
            padding: 30px;
            width: 320px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #0002;
        }

        h2 {
            text-align: center;
            color: #2563eb;
        }

        input {
            width: 100%;
            padding: 12px 0;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            text-indent: 10px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        p {
            text-align: center;
        }

        a {
            color: #2563eb;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Student Login</h2>

        <form action="#" method="post">
            <input type="email"
                   name="email"
                   placeholder="Enter your email"
                   required>

            <input type="password"
                   name="password"
                   placeholder="Enter your password"
                   required>

            <button type="submit">Login</button>
        </form>

        <p>Don't have an account?
            <a href="register.html">Register</a>
        </p>
    </div>

</body>
</html>
