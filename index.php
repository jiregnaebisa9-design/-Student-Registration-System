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
<title>Student Login and Registration</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #edf2f7;
    margin: 0;
    padding: 30px 15px;
}
.container {
    max-width: 400px;
    margin: auto;
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 15px #0002;
}
h2 {
    text-align: center;
    color: #2563eb;
}
input, select {
    width: 100%;
    padding: 12px;
    margin: 8px 0 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
}
label {
    font-weight: bold;
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
.hidden {
    display: none;
}
#message {
    text-align: center;
    color: green;
    margin-top: 15px;
    }
</style>
</head>

<body>

<div class="container" id="loginPage">
    <h2>Student Login</h2>

    <form id="loginForm">
        <label>Email</label>
        <input type="email" id="email"
               placeholder="Enter your email" required>

        <label>Password</label>
        <input type="password" id="password"
               placeholder="Enter your password" required>

        <button type="submit">Login</button>
    </form>
    <p>Don't have an account?</p>
    <button type="button" onclick="showRegister()">
        Student Registration
    </button>
</div>

<div class="container hidden" id="registerPage">
    <h2>Student Registration</h2>

    <form id="studentForm">
        <label>Student Full Name</label>
        <input type="text" id="fullname"
               placeholder="Enter full name" required>

        <label>Class</label>
        <select id="studentClass" required>
            <option value="">Select Class</option>
            <option>Class 1</option>
            <option>Class 2</option>
            <option>Class 3</option>
            <option>Class 4</option>
            <option>Class 5</option>
            <option>Class 6</option>
            <option>Class 7</option>
            <option>Class 8</option>
            <option>Class 9</option>
            <option>Class 10</option>
            <option>Class 11</option>
            <option>Class 12</option>
        </select>
<label>Grade</label>
        <select id="grade" required>
            <option value="">Select Grade</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            <option>F</option>
        </select>

        <label>Mark (0-100)</label>
        <input type="number" id="mark"
               min="0" max="100"
               placeholder="Enter mark" required>

        <button type="submit">Register Student</button>
    </form>

    <p id="message"></p>
    <button type="button" onclick="showLogin()">
        Back to Login
    </button>
</div>

<script>
function showRegister() {
    document.getElementById("loginPage").classList.add("hidden");
    document.getElementById("registerPage").classList.remove("hidden");
}

function showLogin() {
    document.getElementById("registerPage").classList.add("hidden");
    document.getElementById("loginPage").classList.remove("hidden");
}

document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();

    alert("Login form submitted. Real account verification needs a backend.");
});

document.getElementById("studentForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementById("fullname").value.trim();
    const studentClass = document.getElementById("studentClass").value;
    const grade = document.getElementById("grade").value;
    const mark = Number(document.getElementById("mark").value);

    if (!name || !studentClass || !grade ||
        mark < 0 || mark > 100) {
        alert("Please enter valid student information.");
        return;
    }

    document.getElementById("message").textContent =
        "Registration successful! Name: " + name +
        " | Class: " + studentClass +
        " | Grade: " + grade +
        " | Mark: " + mark;
});
</script>

</body>
</html>


    
