<?php

namespace app\core;

class Database
{
    
    const DB_HOST = "127.0.0.1";
    const DB_PORT = "3306";
    const DB_NAME = "MVC";
    const DB_USERNAME = "root";
    const DB_PASSWORD = "4G@tE#D6P%km";

    private static $instance;

    private $pdo;

    private function __construct() {
        $dsn = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);

        try {
            $this->pdo = new \PDO($dsn, self::DB_USERNAME, self::DB_PASSWORD);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
          self::$instance = new Database();
        }
     
        return self::$instance;
    }

    public function getPDO()
    {
        return $this->pdo;
    }
}
