<?php
$name = $username =  $email = $date = $password = $confirm_password = "";
$name_err = $username_err = $email_err = $date_err = $password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name";
    } else {
        $name = trim($_POST["name"]);
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
<style>
    <?php require __DIR__ . '/../../../../public/css/signup.css'; ?>
    <?php require __DIR__ . '/../../../../public/css/login.css'; ?>
</style>

<body>

    <!-- Main -->
    <main id="top" class="border">
        <article id="app" class="container">
            <!-- Sub-Header -->
            <?php require __DIR__ . '/../../partials/sub-header.php' ?>

        </article>

        <div class="limiter">
            <div class="container-login100 border">
                <div class="wrap-login100">
                    <form id='signup_form' class="login100-form" method="post">
                        <span class="login100-form-title">
                            <h2>WELLCOME TO DEVTY TALK</h2>
                        </span>
                        <br>
                        <span class="login100-form-subtitle">
                            Create an account
                        </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" id='name' name="name" placeholder="Name">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <img src="/imgs/icons/name.png" alt="Name">
                            </span>
                        </div>
                        <p class='error'><?php echo $name_err?></p>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" id="username" name="username" placeholder="Username">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <img src="/imgs/icons/user.png" alt="Username">
                            </span>
                        </div>
                        <p class='error'><?php echo $username_err?></p>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="email" id='email' name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <img src="/imgs/icons/email.png" alt="Email">
                            </span>
                        </div>
                        <p class='error'><?php echo $email_err?></p>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="date" id='date' name="date" placeholder="Birthday">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <img src="/imgs/icons/birthday.png" alt="birthday">
                            </span>
                        </div>
                        
                        <!--<div class="wrap-input100 validate-input">
                                <span class='gender-label'>Gender:</span>
                                <span>
                                    <label for="male">
                                        <img src="/imgs/icons/male-gender.png" alt="Male gender">
                                    </label>
                                    <input type="radio" name="gender" id="male"  value="Male" checked>
                                </span>
                                <span>
                                    <label for="male">
                                        <img src="/imgs/icons/female-gender.png" alt="Female gender">
                                    </label>
                                    <input type="radio" name="gender" id="female" value="Female">
                                </span>
                        </div>-->

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" id='password' name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <img src="/imgs/icons/padlock.png" alt="Password">
                            </span>
                        </div>
                        <p class='error'><?php echo $password_err?></p>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" id='confirm_password' name="confirm_password"
                                placeholder="Confirm Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <img src="/imgs/icons/padlock.png" alt="Confirm Password">
                            </span>
                        </div>
                        <p class='error'><?php echo $confirm_password_err?></p>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">
                                Sign up
                            </button>
                        </div>

                        <div class="text-center p-t-30">
                            <span class="txt1">
                                Already signed up?
                            </span>
                            <a class="txt2" href="#">
                                Login
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </main>

    <script src="'/../../../../public/js/signup.css'"></script>

    <!-- Footer -->
    <?php require __DIR__ . '/../../partials/footer.php' ?>
</body>

</html>