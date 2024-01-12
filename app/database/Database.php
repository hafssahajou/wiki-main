<?php

namespace App\database;
use Autoloader;
use PDO;
use PDOException;

require_once __DIR__ . '/../autoload.php';
Autoloader::register();

require 'config.php'; // Include the config.php file



class Database
{
    private static $instance;
    private $connection;
    private static $config; // Add a static property for the configuration

    private function __construct()
    {
        self::$config = include 'config.php'; // Load the configuration

        try {
            $this->connection = new PDO(
                'mysql:host=' . self::$config['DB_SERVERNAME'] . ';dbname=' . self::$config['DB_NAME'],
                self::$config['DB_USERNAME'],
                self::$config['DB_PASSWORD']
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
