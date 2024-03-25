<?php

?>

<!-- NEWFEED -->
<!DOCTYPE html>
<html lang="en">
    <!-- Header -->
<?php require __DIR__ . '/partials/header.php' ?>

<body>
    <!-- Sidebar -->
<?php require __DIR__ . '/partials/sidebar.php' ?>

<!-- Main -->
<main id="top" class="home-page">
    <article id="app" class="container">
        <!-- Sub-Header -->
        <?php require __DIR__ . '/partials/sub-header.php' ?>

        <div class="row mt-4">
            <div class="col-lg-8">
                <!-- Newest Post -->
                <section id="newest">
                    <h3><img height="32px" src="/imgs/icons/newest.png" alt=""> .Newest</h3>
                </section>

                <!-- Trending Posts -->
                <section id="trending">
                    <h3><img height="32px" src="/imgs/icons/trending.png" alt=""> .Trending</h3>
                </section>
            </div>

            <div class="col-lg-3">
                <h5>.Filter</h5>
            </div>
        </div>

    </article>
</main>

    <!-- Footer -->
<?php require __DIR__ . '/partials/footer.php' ?>    
</body>
</html>