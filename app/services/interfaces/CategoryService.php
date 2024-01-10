<?php 
interface CategoryService {
    public function addCategory(Category $category);
    public function displayCategory();
    public function updateCategory(Category $category);
    public function deleteCategory($categoryId);
}
?>