<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/x-icon" href="images/money-svgrepo.svg">
    <title>Login SPP</title>
</head>
<body>
    <div class="login-content">
        <div class="login-content-header">
            <h1>Login</h1>
            <img src="images/money-svgrepo.svg" alt="logo login">
        </div>
        <form action="login/proses_login.php" method="post">
            <div class="login-content-text">
                <input type="text" name="username" id="username" required autofocus autocomplete="off">
                <span></span>
                <label for="username">Username</label>
            </div>
            <div class="login-content-text">
                <input type="password" name="password" id="password" required autocomplete="off">
                <span></span>
                <label for="password">Password</label>
            </div>
            <input type="submit" value="Login"> 
            <div class="login-footer">Don't have account?
				<a href="https://wa.me/6289685868091">Contact Admin</a>
			</div>
        </form>
    </div>
</body>
</html>