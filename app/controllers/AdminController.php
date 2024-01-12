<?php

require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../models/CategoryModel.php';
require_once __DIR__ . '/../models/TagModel.php';
require_once __DIR__ . '/../models/WikiModel.php';




class AdminController
{

    public function admin($users)
    {
        include '../../views/admin/home.php';
        exit();
    }
    public function category($category , $tags)
    {
        include '../../views/admin/category.php';
        exit();
    }
    public function tags()
    {
        include '../../views/admin/home.php';
        exit();
    }
    public function wikis($wikis)
    {
        include '../../views/admin/wikis.php';
        exit();
    }

    public function allusers(){
        $users = UserModel::getAllUsers();
        $this->admin($users);
    }

    public function allCategories(){
        $category = CategoryModel::getAllCategories();
        $tags = TagModel::getAllTags();
        $this->category($category , $tags);
    }
    public function allwikis(){
        
        $wikis = WikiModel::getAllWikis();
        $this->wikis($wikis);
    }

    public function getWikisById(){
        if (isset($_GET['id'])) {
            $id = base64_decode($_GET['id']);
            $wiki = WikiModel::getWikiById($id); 
            include '../../views/admin/editwiki.php';
            exit();
        } else {
            echo "Error: 'id' parameter is missing.";
        }
    }
    public function updateStatus(){
        if (isset($_POST["update"])) {
            if (isset($_GET['id'])) {
                $wikiId = base64_decode($_GET['id']);
                $status = $_POST['status'];
                var_dump($wikiId, $status);
                WikiModel::updateWiki($wikiId, $status);
                header('Location:wikis');
            } else {
                echo "Error: 'id' parameter is missing.";
            }
        }
    }
    
}
