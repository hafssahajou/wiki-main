<?php
require '../app/controllers/AdminController.php';
require '../app/controllers/CategoryController.php';
require '../app/controllers/HomeController.php';
require '../app/controllers/TagController.php';
require '../app/controllers/UserController.php';


// Création d'un routeur.
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'index':
            $home = new HomeController();
            $home->addwk();
            break;
        case 'category':
            $categoryId = $_GET['id'];
            $category = new CategoryController();
            $category->addCategory();
            break;
      
        default:
            header('location: 404.php');
            break;
    }
}
?>