<!-- Routes -->
<?php
    $req = $_SERVER['REQUEST_URI'];
    
    switch ($req) {
        case '/':
        case '/home.php':
            require __DIR__ . '/../src/Views/home.php';
            break;
        case '/login.php':
            require __DIR__ . '/../src/Views/sites/login.php';
            break;
        default:
            http_response_code(404);
            break;
    }
?>

<!-- E -->