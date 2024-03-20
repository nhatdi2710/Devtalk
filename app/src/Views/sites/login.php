<?php

?>

<!DOCTYPE html>
<html lang="en">
<!-- Header -->
<?php require __DIR__ . '/../partials/header.php' ?>
<style>
        <?php require __DIR__ . '/../../../public/css/login.css'; ?>
</style>
<body>

    <!-- Main -->
    <main id="top" class="home-page">
        <article id="app" class="container">
            <!-- Sub-Header -->
            <?php require __DIR__ . '/../partials/sub-header.php' ?>

        </article>
    </main>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="/imgs/login_img_1.png" alt="IMG">
                </div>

                <form class="login100-form" method="post">
                    <span class="login100-form-title">
                        Login
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="Username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <img src="/imgs/icons/user.png" alt="Username">
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <img src="/imgs/icons/padlock.png" alt="Password">
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <!-- Footer -->
    <?php require __DIR__ . '/../partials/footer.php' ?>
</body>

</html>