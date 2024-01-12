<?php
use App\DAO\TagDAO;


require_once __DIR__ . '/../DAO/TagDAO.php';



class TagModel
{
    public static function addTag($tag){
        TagDAO::addTag($tag);
    }
    public static function getAllTags(){
        $tags = TagDAO::getAllTags();
        return $tags;
    }
}