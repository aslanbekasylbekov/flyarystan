<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel = "icon" href ="flyarystan-logo.png">
        <link rel="stylesheet" href="sign-in.css">
        <title>Login Form</title>
    </head>
    <body>
        <nav>
            <div class="nav__logo"><a href="flyarystan.php"><img src="https://flyarystan.com/Assets/img/logo-new.png" alt="FlyArystan" title="FlyArystan"></a></div>
            <div class="users">
                <a href=""><i class="fa-solid fa-globe"></i></a>
            </div>
        </nav>
        <div class="login-box">
            <div class="login-header">
                <header>FlyArystan Membership Login</header>
            </div>
            <?php
            if (isset($_POST["login"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                require_once "database.php";
                $sql = "SELECT * FROM user WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if ($user) {
                    if (password_verify($password, $user["password"])) {
                        session_start();
                        $_SESSION["user"] = "yes";
                        header("Location: login.php");
                        die();
                    }else{
                        echo "<div class='alert alert-danger'>Password does not match</div>";
                    }
                }else{
                    echo "<div class='alert alert-danger'>Email does not match</div>";
                }
            }
            ?>
            <form action="sign-in.php" method="post">
                <div class="input-box">
                    <p>Email*</p>
                    <input type="email" name="email" class="input-field" placeholder="Enter">
                </div>
                <div class="input-box">
                    <p>Password*</p>
                    <input type="password" name="password" class="input-field" placeholder="Enter">
                </div>
                <div class="forgot">
                    <section>
                        <input type="checkbox">
                        <label for="check">Remember me</label>
                    </section>
                    <section>
                        <a href="#">Forgot password?</a>
                    </section>
                </div>
                <div class="input-submit">
                    <input type="submit" value="Login" name="login" class="submit-btn">
                </div>
            </form>
            <div class="sign-up-link">
                <p>Not a member yet?  <a href="sign-up.php" target="_blank">Sign Up</a></p>
            </div>
        </div>
    </body>
</html>