<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* styles.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

#form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

#btn {
    background-color: #4caf50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

#btn:hover {
    background-color: #45a049;
}

    </style>

   

</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
        <label>Username</label>
        <input type="text" id="user" name="user"></br></br>
        <label>Password</label>
        <input type="password" id="pass" name="pass"></br></br>
        <input type="submit" id="btn" value="Login" name="submit">
        </form>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length==""&& pass.length==""){
                alert("username and password field is empty!!!");
                return false
            }
            else{
                if(user.length==""){
                alert("Username is empty!!!");
                return false
            }
            if(pass.length==""){
                alert("Password is empty!!!");
                return false
        }
    </script>
</body>
</html>