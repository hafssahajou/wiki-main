<?php
use App\DAO\CategoryDAO;
require_once __DIR__ . '/../DAO/CategoryDAO.php';


class CategoryModel
{
    public static function addCategory($category)
    {
        CategoryDAO::addCategory($category);
    }
    public static function getAllCategories()
    {
        $categories = CategoryDAO::getAllCategories();
        return $categories;
    }
}