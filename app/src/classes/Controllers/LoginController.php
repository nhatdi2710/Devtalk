<?php

namespace App\Controllers;

use PDOException;
use App\Models\Profile;

class ProfilesController {
    public function index(): void {
        require __DIR__ . '/../src/Views/sites/login.php';
    }

    public function accExist(): boolean {
        $profile = new Profile();
    }
}