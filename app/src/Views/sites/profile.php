<?php

?>

<!-- NEWFEED -->
<!DOCTYPE html>
<html lang="en">
    <!-- Header -->
<?php require __DIR__ . '/../partials/header.php' ?>

<body>

<!-- Main -->
<main id="top" class="home-page">
    <article id="app" class="container">
        <!-- Sub-Header -->
        <?php require __DIR__ . '/../partials/sub-header.php' ?>

        <div class="row mt-4">
            
        </div>
    </article>
        <!-- Tạo một input để thêm bài đăng mới-->
        <div class="row m-5">
            <div class="col-9 border-end">
                <form action="/search.php/?q=">
                    <div class="input-group d-flex justify-content-center mb-3">
                        <input type="text" class="form-control p-3 fs-5 border-end-0" placeholder="Add new post">
                        <button class="btn border-end border-top border-bottom" type="submit" id="button-addon2">
                            <img src="/imgs/icons/add.png" alt="">
                        </button>
                    </div>
                </form>

                <br>
                <div class="card">
                    <form action="/delete_post.php" method="post" class="position-absolute top-0 end-0 p-2">
                        <div class="input-group">
                            <div class="dropdown position-absolute top-0 end-0 p-2">
                                <button class="btn" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/imgs/icons/more.png" alt="">
                                </button>
                                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton">
                                    <li><button class="dropdown-item" type="button" name="edit_option" value="delete">Edit post</button></li>
                                    <li><button class="dropdown-item" type="submit" name="delete_option" value="delete">Delete post</button></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="/imgs/avatars/default-avatar.png" alt="Avatar" class="avatar-post mr-3">
                            <h5 class="card-title mb-0">Username</h5>
                        </div>
                        <p class="card-text mt-2">Content post</p>
                        <div class="d-flex justify-content-start">
                            <button type="button" class="btn">
                                <img src="/imgs/icons/like.png" alt="">
                            </button>
                            <button type="button" class="btn">
                                <img src="/imgs/icons/comments.png" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-center border-0" >
                    <div class="d-flex justify-content-center mt-3">
                        <img src="/imgs/avatars/default-avatar.png" class="avatar-user" alt="Avatar">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Username</h5>
                        <p class="card-text">Email: user@example.com</p>
                        <p class="card-text">Phone: +1234567890</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
<?php require __DIR__ . '/../partials/footer.php' ?>    
</body>
</html>