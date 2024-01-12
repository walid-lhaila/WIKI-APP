<?php 

class CategoryServiceImp implements CategoryService {
    private Database $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function addCategory(Category $category){
        $addCategoryQuery = "INSERT INTO category (categoryId, categoryName, categoryDesc, created_at) VALUES (:categoryId, :categoryName, :categoryDesc, NOW())";
        $this->db->query($addCategoryQuery);
        $this->db->bind(":categoryId", $category->getCategoryId());
        $this->db->bind(":categoryName", $category->getCategoryName());
        $this->db->bind(":categoryDesc", $category->getCategoryDesc());

        try {
            $this->db->execute();

        }catch(PDOException $e){
            die($e->getMessage());
        }

    }

    public function updateCategory(Category $category){

    }

    public function deleteCategory($categoryId){
        $deleteCategoryQuery = "DELETE FROM category WHERE categoryId = :categoryId";
        $this->db->query($deleteCategoryQuery);
        $this->db->bind(":categoryId", $categoryId);
    
        try {
            $this->db->execute();
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function displayCategory(){
        $fetshAllCategory = "SELECT * FROM category ORDER BY created_at DESC";
        $this->db->query($fetshAllCategory);

        try{
            return $this->db->fetchMultipleRows();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
}


?>