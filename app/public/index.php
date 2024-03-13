<!-- Routes -->
<?php
    $req = $_SERVER['REQUEST_URI'];

    switch ($req) {
        case '/':
        case '/home':
            require __DIR__ . '/../src/Views/home.php';
    }
?>
<!--  -->