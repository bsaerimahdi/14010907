<!DOCTYPE html>
<html lang="en">
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="stylee.css">
    <title>Login</title>
</head>
<body>
<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Log In</button>
</form>
</body>
</html>
<head>
    <style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
 
body {
    margin: 50px auto;
    text-align: center;
    width: 800px;
    background-color: #303841;
}
 
h1 {
    font-size: 2rem;
    text-transform: uppercase;
}
 
label {
    width: 150px;
    display: inline-block;
    font-size: 1rem;
    font-family: 'Lato';
}
 
input {
    border: 2px solid #ccc;
    font-size: 1rem;
    font-weight: 100;
    padding: 10px;
}
 
form {
    margin: 25px auto;
    padding: 20px;
    border-radius:200px 200px 200px 200px black;
    width: 500px;
    background:#d7d8dc;
    margin-top: 200px;
}
 
div.form-element {
    margin: 20px 0;
}
 
button {
    padding: 10px;
    font-size: 1rem;
    font-weight: 100;
    background: #ffcb08;
    color: black;
    border: none;
}
 
p.success,
p.error {
    color: white;
    background: yellowgreen;
    display: inline-block;
    padding: 2px 10px;
}
 
p.error {
    background: orangered;
}
