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
        case '/signup.php':
            require __DIR__ . '/../src/Views/sites/sign-up/signup.php';
                break;
        default:
            http_response_code(404);
            break;
    }

    // session_start();
    // require_once __DIR__ . '/../../vendor/autoload.php';
    
    // require_once __DIR__ . '/../src/routes/login.php';

    // use Bramus\Router\Router;

    // $router = new Router();
    // $router = login_routes($router);

    // $router->run();
?>