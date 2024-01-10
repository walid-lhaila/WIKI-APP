<?php 
class Admin extends Controller {

    public function __construct(){

    }
   
 

   public function dashboard(){
    $securityService = new SecurityServiceImp();
    $securityService->checkForAdmin();  
    // var_dump($_SESSION["roleName"]);
    $this->view('admin/dashboard');
   }

   public function categories(){
    $this->view('admin/categories');
    if(isset($_POST["addCategory"])){
        $categoryId = uniqid();
        $categoryName = $_POST["name"];
        $categoryDesc = $_POST["desc"];

        $categoryToAdd = new Category();
        $categoryToAdd->setCategoryId($categoryId);
        $categoryToAdd->setCategoryName($categoryName);
        $categoryToAdd->setCategoryDesc($categoryDesc);
        
        $categoryService = new CategoryServiceImp();

        try{
            $categoryService->addCategory($categoryToAdd);

        }catch(PDOException $e){
            die($e->getMessage());
        }


    }

   }
   public function wikis(){
    $this->view('admin/wikis');
   }
   public function tags(){
    $this->view('admin/tags');
   }



}




?>