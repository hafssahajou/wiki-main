<?php

require_once __DIR__ . '/../DAO/WikiDAO.php';

class WikiModel
{
    public static function addWikiWithTags($title, $category, $tags, $image, $description , $user_id)
    {
        $wikiId = WikiDAO::addWiki($title, $category, $image, $description , $user_id , $tags);

        if ($wikiId) {
            WikiDAO::addTagsForWiki($wikiId, $tags);
        }

        return $wikiId;
    }
    public static function getAllWikis(){
        $wiki = WikiDAO::getAllWikis();
        return $wiki;
    }

    public static function getWikisByuserId($userId){
        $wiki = WikiDAO::getWikisByuserId($userId);
        return $wiki;
    }

    public static function getWikiById($id){
        $wiki = WikiDAO::getWikisById($id);
        return  $wiki ? $wiki : null;
    }

    public static function updateWiki($wikiId , $status){
        WikiDAO::updateWiki($wikiId , $status);
        
    }

}
