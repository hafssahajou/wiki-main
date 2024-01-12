<?php
require_once __DIR__ . '/../models/CategoryModel.php';

class CategoryController
{

    public static function addCategory(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addcatg'])) {
            $category = $_POST['category'];

            CategoryModel::addCategory($category);
            header("Location: category.php");
            exit();
        }
    }
    

   
}
