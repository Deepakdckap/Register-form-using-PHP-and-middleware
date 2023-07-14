<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form action="/login_logics" method="post">
        <h2>Login</h2>
        <label for="username">Username</label>
        <input type="text" id="username" name="usernames" pattern="[a-z,A-Z]*" placeholder="Name" required autocomplete="on">
        
        <label for="password">Password</label>
        <input type="password" id="password" name="passwords" placeholder="password" required>
        
        <input type="submit" value="Login">
        <p><a style="text-decoration: none; color:  rgb(88, 107, 181);" href="/">Create an account?</a></p>
      </form>
</body>
</html>