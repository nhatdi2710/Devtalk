<?php
$name = $username =  $email = $date = $password = $confirm_password = "";
$name_err = $username_err = $email_err = $date_err = $password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["fname"]))) {
        $name_err = "Please enter your name";
    } else {
        $name = trim($_POST["fname"]);
    }

    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter your username";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email address.";
    } else {
        if (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email! Please enter a valid email address";
        } else {
            $email = trim($_POST["email"]);
        }
    }

    if (empty(trim($_POST["date"]))) {
        $date_err = "Please choose your birthday.";
    } else {
        $date = trim($_POST["date"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } elseif (strlen(trim($_POST["password"])) < 8) {
        $password_err = "Password length must be greater than 8 characters";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm your password";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match! Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Header -->
<?php require __DIR__ . '/../../partials/header.php' ?>

<body>

    <!-- Main -->
    <main id="top">
        <article id="app" class="container">
            <!-- Sub-Header -->
            <?php require __DIR__ . '/../../partials/sub-header.php' ?>

            <div class="sign-pages">
                <center>
                    <form id="signup-form" method="post">
                        <h2 class="sign-form__title">WELCOME TO Devtalk.</h2>
        
                        <p class="signup-form__subtitle mt-4">Create your account here</p>
        
                        <div class="signup-form__content">
                            <div class="wrap-input validate-input mt-4">
                                <input class="input" type="text" id="name" name="fname" placeholder="Full Name">
                                <span class="symbol-input">
                                    <img src="/imgs/icons/name.png" alt="Name-icon">
                                </span>
                                <p class='error'><?= $name_err?></p>
                            </div>

        
                            <div class="wrap-input validate-input mt-4">
                                <input class="input" type="email" id='email' name="email" placeholder="Email">
                                <span class="focus-input"></span>
                                <span class="symbol-input">
                                    <img src="/imgs/icons/email.png" alt="Email">
                                </span>
                                <p class='error'><?php echo $email_err?></p>
                            </div>

                            <div class="wrap-input validate-input mt-4">
                                    <input style="width: 284px;" class="input" type="date" id="date" name="date">
                                    <span class="focus-input"></span>
                            </div>

                            <div class="row wrap-input validate-input mt-4 gender">
                                <span class="gender__label">Gender:</span>

                                <span class="mt-2">
                                    <label for="male">
                                        <img height="16px" src="/imgs/icons/male.png" alt="Male gender">
                                    </label>
                                    <input type="radio" name="gender" id="male"  value="1" checked>
                                </span>

                                <span class="mt-2">
                                    <label for="female">
                                        <img height="18px" src="/imgs/icons/female.png" alt="Female gender">
                                    </label>
                                    <input type="radio" name="gender" id="female" value="0">
                                </span>

                            </div>

                            <div class="wrap-input validate-input mt-4">
                                    <input class="input" type="text" id="username" name="username" placeholder="Username">
                                    <span class="focus-input"></span>
                                    <span class="symbol-input">
                                        <img src="/imgs/icons/user.png" alt="Username">
                                    </span>
                                    <p class='error'><?php echo $username_err?></p>
                                </div>
        
                                <div class="wrap-input validate-input mt-4">
                                    <input class="input" type="password" id='password' name="password" placeholder="Password">
                                    <span class="focus-input"></span>
                                    <span class="symbol-input">
                                        <img src="/imgs/icons/padlock.png" alt="Password">
                                    </span>
                                    <p class='error'><?php echo $password_err?></p>
                                </div>
        
                                <div class="wrap-input validate-input mt-4">
                                    <input class="input" type="password" id='confirm_password' name="confirm_password"
                                        placeholder="Confirm Password">
                                    <span class="focus-input"></span>
                                    <span class="symbol-input">
                                        <img src="/imgs/icons/padlock.png" alt="Confirm Password">
                                    </span>
                                    <p class='error'><?php echo $confirm_password_err?></p>
                                </div>
        
                                <button class="sign-form__btn mt-4" type="submit">Sign Up</button>
                                <div class="container-login-form-btn mt-4">
                                </div>
        
                                <div class="text-center mt-4">
                                    <span>
                                        Already signed up? <a class="txt2" href="/login.php">Login</a>
                                    </span>
                                </div>
        
                    </form>
                </center>
            </div>
        </article>
    </main>
    <!-- Footer -->
    <?php require __DIR__ . '/../../partials/footer.php' ?>
</body>

</html>