<?php 
interface CategoryService {
    public function addCategory();
    public function getAllCategory();
    public function updateCategory($category);
    public function deleteCategory(Category $categoryId);
}
?>