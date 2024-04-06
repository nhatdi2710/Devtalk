<?php

namespace App\db;

use PDO;
use PDOException;

class DbHandler {
    public $host;
    public $dbname;
    public $username;
    
    static public function connect(): PDO {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];

        // ...
        $dsn = "mysql:host=$host;port=3306;dbname=$dbname;charset=utf8";
        try {
            return new PDO($dsn);
        }
        catch(PDOException $e) {
			echo $e->getMessage();
		}
    }

    public function getUsername() {

    }
}