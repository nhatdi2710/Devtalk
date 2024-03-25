<?php
    $username = $password ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $password = $_POST["pass"];

        if ($username == "admin" && $password == "123") {
            //Viết hàm redirect 
            header("Location: /home.php", true, 302);
        } else {
            echo "Username/password incorrect!";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Header -->
<?php require __DIR__ . '/../partials/header.php' ?>


<body>

<!-- Main -->
<main id="top">
    <article id="app" class="container">
        <!-- Sub-Header -->
        <?php require __DIR__ . '/../partials/sub-header.php' ?>

        <div class="row justify-content-center sign-pages">
            <div class="col-lg-5 login-thumbnail">
                <img height="600px" src="/imgs/login-thumbnail--1.png" alt="">
            </div>

            <form class="col-lg-4" method="post">
                <div class="row login-form">
                    <div class="col">
                        <span class="sign-form__title">
                        - Get Started -
                        </span>
                    </div>

                    <div class="col login-form__input mt-4">
                        <div class="wrap-input validate-input mt-4">
                            <input class="input" type="text" name="username" placeholder="Username">
                            <span class="focus-input"></span>
                            <span class="symbol-input">
                                <img src="/imgs/icons/user.png" alt="Username">
                            </span>
                        </div>

                        <div class="wrap-input validate-input mt-4">
                            <input class="input" type="password" name="pass" placeholder="Password">
                            <span class="focus-input"></span>
                            <span class="symbol-input">
                                <img src="/imgs/icons/padlock.png" alt="Password">
                            </span>
                        </div>

                        <div class="wrap-input mt-4">
                            <button type="submit" class="sign-form__btn">Log In</button>
                        </div>

                        <div class="text-center mt-4">
                            <span>
                                Forgot <a href="#">Username / Password?</a>
                            </span>          
                        </div>
                    </div>

                    <div class="col-lg-5 login-form__nav-to-signup">
                        <a href="/signup.php">Create your Account</a>
                    </div>
                </div>
            </form>              
        </div>
    </article>
</main>

    <!-- Footer -->
    <?php require __DIR__ . '/../partials/footer.php' ?>
</body>

</html>