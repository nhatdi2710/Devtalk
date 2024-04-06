<?php

namespace App\Models;

use PDO;

class Profile {
    private PDO $connection;

    public string $name;
    public int $gender;
    public $date;
    public ?string $avatar;
    public string $username;
    public string $password;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }
}