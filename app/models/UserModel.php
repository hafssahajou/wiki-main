<?php

require_once __DIR__ . '/../DAO/UserDAO.php';


class UserModel
{
    public static function registerUser($fullname, $address, $profil, $email, $password, $roleId)
    {
        UserDAO::registerUser($fullname, $address, $profil, $email, password_hash($password, PASSWORD_DEFAULT), $roleId);
    }

    public static function authenticateUser($email, $password)
    {
        $user = UserDAO::getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            return true;
        }

        return false;
    }

    public static function getAllUsers(){
        $users = UserDAO::getAllUsers();
        return $users;
    }

}
