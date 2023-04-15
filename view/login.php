<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="public/styles/main.css" />
</head>

<body>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="/patient/view/index.html">Healthify</a>
            </div>
            <ul class="menu">
                <li><a href="/patient/view/index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><button class="btn login-btn">Login</button></li>
            </ul>
        </div>
    </nav>
    <div class="signin-content">
        <div class="error"></div>
        <form id="form" name="login" onsubmit="return validation()" action="../controller/loginCheck.php" method="POST">
            <h1>Login</h1>
            <div class="form-group">
                <label for="email">Email</label><br />
                <input type="email" name="email" id="email" />
                <span id="error" style="color:red;"></span>

            </div>

            <div class="form-group">
                <label for="password">Password</label><br />
                <input type="password" name="password" id="password" />
                <span id="errorPass" style="color:red;"></span>

            </div>

            <div class="form-group">
                <input class="btn" name="submit" type="submit" value="Submit" />
            </div>
            <div class="form-group">
                <label for="rememberMe">Remember Me</label>
                <input type="checkbox" name="rememberMe">
            </div>
            <div class="form-group">
                <a href="./forgot_password.php">Forgot Password?</a>
            </div>
            <p>Don't have an account? <a href="./register.php"><strong>Register</strong></a></p>
        </form>
    </div>

</body>

</html>
<script src="./public/index.js"></script>