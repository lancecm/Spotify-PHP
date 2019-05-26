<?php
    include("includes/classes/Account.php");
    $account = new Account();
    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
?>
<html>
<head>
    <title>Welcome to Spotify!</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>
                Login to your account
            </h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="username" type="text" placeholder="e.g. Ming" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="password" type="password" placeholder="Your Password" required>
            </p>
            <button type="submit" name="loginButton">LOGIN</button>
        </form>

        <form id="registerForm" action="register.php" method="POST">
            <h2>
                Create your free account
            </h2>
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. mingl" required>
            </p>
            <p>
                <label for="firstName">First Name</label>
                <input id="firstName" name="firstName" type="text" placeholder="e.g. Ming" required>
            </p>
            <p>
                <label for="lastName">Last Name</label>
                <input id="lastName" name="lastName" type="text" placeholder="e.g. L" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="e.g. ming@gmail.com" required>
            </p>
            <p>
                <label for="email2">Confirm Email</label>
                <input id="email2" name="email2" type="text" placeholder="e.g. Ming" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Your Password" required>
            </p>
            <p>
                <label for="password2">Confirm Password</label>
                <input id="password2" name="password2" type="password" placeholder="Your Password" required>
            </p>
            <button type="submit" name="registerButton">SIGN UP</button>
        </form>
    </div>
</body>
</html>