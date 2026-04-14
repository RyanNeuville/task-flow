<?php

namespace App\classes;

use PDO;
use Exception;

class Database
{
    private static $instance = null;
    private $pdo;

    private function __construct()
    {
        $config = require __DIR__ . '/../config/database.php';

        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8mb4";

        try {
            $this->$pdo = new PDO($dsn, $config['user'], $config['password'], $config['options']);
        } catch (Exception $e) {
            die("Erreur de connexion à la base de données: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->pdo;
    }
}
