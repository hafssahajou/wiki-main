<?php

namespace App\DAO;

use App\database\Database;
use App\DAO\TagDAO;
use Autoloader;

require_once __DIR__ . '/../autoload.php';
Autoloader::registre();

class WikiDAO
{
    public static function addWiki($title, $category, $image, $description , $user_id , $tags)
{
    try {
        $conn = Database::getInstance()->getConnection();

        $categoryId = CategoryDAO::getCategoryId($category);

        if (!$categoryId) {
            echo "Error: Category not found.";
            return false;
        }

        $sql = "INSERT INTO `wiki` (`title`, `description`, `image`, `user_id` , `category_id`) VALUES (?, ?, ?, ? ,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $description);
        $stmt->bindParam(3, $image);
        $stmt->bindParam(4, $user_id);
        $stmt->bindParam(5, $categoryId); 
        $stmt->execute();
        $lastid = $conn->lastInsertId();
        self::addTagsForWiki($lastid , $tags);
    } catch (\PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}


public static function addTagsForWiki($wikiId, $tags)
{
    try {
        $conn = Database::getInstance()->getConnection();

        foreach ($tags as $tag) {
            $tagId = TagDAO::getTagId($tag);

            if ($tagId !== null) {
                $sql = "INSERT INTO `wiki_tag` (`wiki_id`, `tag_id`) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $wikiId);
                $stmt->bindParam(2, $tagId);
                $stmt->execute();
            } else {
                echo "Error: Tag not found - $tag";
            }
        }
    } catch (\PDOException $e) {
        echo $e->getMessage();
    }
}




    public static function getAllWikis(){
        try{
            $conn = Database::getInstance()->getConnection();
            $sql = "SELECT w.*, c.name as category_name
            FROM `wiki` w
            JOIN `category` c ON w.category_id = c.id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;

        }
        catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
    public static function getWikisByuserId($userId){
        try{
            $conn = Database::getInstance()->getConnection();
            $sql = "SELECT * FROM `wiki` WHERE user_id = ? AND status = 'Accepted'";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $userId);
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function updateWiki($wikiId , $status){
        try{
            $conn = Database::getInstance()->getConnection();
            $sql = "UPDATE `wiki` SET `status` = ? WHERE `id` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $status);
            $stmt->bindParam(2, $wikiId);
            $stmt->execute();
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getWikisById($wikiId){
        try {
            $conn = Database::getInstance()->getConnection();
            $sql = "SELECT w.*, u.fullname AS user_name, u.email AS user_email, u.profil AS user_profil, t.name AS tag_name
            FROM Wiki w
            JOIN User u ON w.user_id = u.id
            LEFT JOIN Wiki_Tag wt ON w.id = wt.wiki_id
            LEFT JOIN Tag t ON wt.tag_id = t.id
            WHERE w.id = ?;
            ";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $wikiId);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC); 
            return $result;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }


}
