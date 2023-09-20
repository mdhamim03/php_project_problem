<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./loginAssets/css/style.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="./controller//loginUser.php" method="POST">
                <h2 class="text-center"><strong>Login</strong> System</h2>
                <div class="form-group">
                    <input class="form-control" name="email" type="text" placeholder="Enter Email">
                    <span class="text-danger"><?= isset($_SESSION['loginError']['email_error']) ? $_SESSION['loginError']['email_error'] : ''?></span>
                </div>
                <div class="form-group">
                    <input class="form-control" name="password" type="text" placeholder="Enter Password">
                    <span class="text-danger"><?= isset($_SESSION['loginError']['password_error']) ? $_SESSION['loginError']['password_error'] : ''?></span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary " type="submit">Login</button>
                    <a href="./register.php" class="btn btn-info">Register</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php
    session_unset();
?>