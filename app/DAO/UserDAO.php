<?php

namespace App\DAO;
use Autoloader;

require_once __DIR__ . '/../autoload.php';
Autoloader::registre();

use App\database\Database;

class UserDAO
{
    public static function registerUser($fullname, $address, $profil, $email, $password , $roleId)
    {
        try {
            $conn = Database::getInstance()->getConnection();

            $sql = "INSERT INTO `user` (`fullname`, `address`, `profil`, `email`, `password`, `role_id`) VALUES(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(1, $fullname);
            $stmt->bindParam(2, $address);
            $stmt->bindParam(3, $profil);
            $stmt->bindParam(4, $email);
            $stmt->bindParam(5, $password);
            $stmt->bindParam(6, $roleId);

            $stmt->execute();
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function getUserByEmail($email)
    {
        try {
            $conn = Database::getInstance()->getConnection();

            $sql = "SELECT * FROM `user` WHERE `email` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $email);
            $stmt->execute();

            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $user;
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null; 
        }
    }

    public static function getAllUsers(){
        try {

            $conn = Database::getInstance()->getConnection();
            $sql = "SELECT * FROM `user`WHERE role_id = 2 ORDER BY fullname DESC";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $users;
        }catch (\PDOException $e) {
            echo "Error". $e->getMessage();
        }
    }
}
