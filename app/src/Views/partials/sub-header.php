<section class="row sub-header">
    <a href="/" class="col-lg-2">
        <img src="/imgs/devtalk-logo--text.png" alt="logo" height="70px">
    </a>

    <!-- Tạo hộp thoại tìm kiếm và có nút là icon tìm kiếm nằm trong phần tìm kiếm để submit -->
    <div class="col-lg-4">
        <form action="/search.php/?q=">
            <div class="input-group">
                <input class="form-control" type="text" name="q" placeholder="Search here...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-lg-2 log-sign">
        <a href="/login.php" class="nav-link">Log In</a>
        <a href="/signup.php" class="nav-link">Sign Up</a>
    </div>
</section>