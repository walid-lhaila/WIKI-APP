<?php 

class CategoryServiceImp implements CategoryService {
    private Database $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function addCategory(Category $category){
        $addCategoryQuery = "INSERT INTO category (

    }

    public function updateCategory(Category $category){

    }

    public function deleteCategory($categoryId){

    }

    public function displayCategory(){

    }
}


?>