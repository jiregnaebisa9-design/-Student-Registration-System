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
                <meta charset"UTF-8">
                <title>Student Registration Sytem</title>
            </head>
            </body>
            <h1>student registration system</h1>
            <h2>Welcome to our School</h2>
            <form>
                <lebal>Student name:</lebal>
                <input type="text" name="student_name" required>
                <br><br>
                <label>student ID:</label>
                <input type="text" name="student_id" required>
                <br><br>
                <label>class:</label>
                <input type="text" name="Class" required>
                <br><br>
                <button type="submit">Regiter Student</button>

            </form>
            </head>

            </html>l
    
