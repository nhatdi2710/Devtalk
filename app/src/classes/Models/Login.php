<?php

session_start();
require __DIR__ . '/../Tools.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/../../src/db/db_connect.php';
        
    $check = $pdo->prepare('SELECT * FROM phanloai_taikhoan WHERE ? ');
    $check->execute($_POST['classify']);

    $success = false;

    if (!empty($_POST['username']) && !empty($_POST['pass'])) {
        if ($check == "quantrivien") {
            $account = $pdo->prepare('SELECT username_qtv, password_qtv FROM tk_quantrivien');
            $account->execute();

            while ($row = $account->fetch()) {
                if ((strtolower($row['username_qtv']) == $_POST['username']) && ($row['password_qtv'] == $_POST['pass'])) {
                    $_SESSION['user'] = $_POST['username'];
                    $success = true;
                    break;
                } else {
                    $error_message = 'Tài khoản và mật khẩu không khớp!';
                }
            }
        }

        if ($success) redirect("/pages/admin/show.php");
        
    } else {
        $error_message = 'Hãy đảm bảo rằng bạn cung cấp đầy đủ địa chỉ email và mật khẩu!';
    }
}