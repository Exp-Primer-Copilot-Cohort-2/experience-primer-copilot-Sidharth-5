<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style/Login.css">
    <title>Log In</title>
</head>
<body>
    <form action="#" method="post" class="login">
        <h1>Welcome to BookLab!</h1>
       <div class="login-container">
            <input class="input-box"  type="email" name="email" placeholder="email" id="email" required>
       </div>
       <div class="login-container">
            <input class="input-box" type="password" name="pwd" placeholder="Password" id="pwd" required>
       </div> 
        <div class="login-container">
            <label>
            <input  type="checkbox" id="Remember-me">Remember me
            </label>
        </div>
        
        <button type="sumbit" class="login-button">Login</button>
        <p>Don't have an account? <a href="#"> Sign Up</a> </p>
    </form>

</body>
</html>