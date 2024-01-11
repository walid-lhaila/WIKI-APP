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
   
    if(isset($_POST["addCategory"])){
        $categoryId = uniqid();
        $categoryName = $_POST["categoryName"];
        $categoryDesc = $_POST["categoryDesc"];

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
        $this->view('admin/categories');
   }




   public function wikis(){
    $this->view('admin/wikis');
   }





   public function tags(){
    if(isset($_POST["addTag"])){
    $tagId = uniqid();
    $tagName = $_POST["tagName"];
    
    $tagToAdd = new Tag();
    $tagToAdd->setTagId($tagId);
    $tagToAdd->setTagName($tagName);
    
    $tagService = new tagServiceImp();

        try {
            $tagService->addTag($tagToAdd);
        }catch(PDOException $e){
            die($e->getMessage());
         }
    }
    $this->view('admin/tags');
   }




   public function user(){
    if(isset($_POST["Adduser"])){
    $userId = uniqid();
    $username = $_POST["username"];
    $pw = $_POST["pw"];
    $email = $_POST["email"];

    $userToAdd = new AppUser();
    $userToAdd->setUserId($userId);
    $userToAdd->setUsername($username);
    $userToAdd->setPw($pw);
    $userToAdd->setEmail($email);

    $roleOfAdmin = new RoleOfUser();
    $roleOfAdmin->setUser($userToAdd);
    $userService = new UserServiceImp();
    $roleOfAdminService = new RoleOfUserServicesImp();
    
    try {
        $userService->addUser($userToAdd);
        $roleOfAdminService->AddRoleOfAdmin($roleOfAdmin);
    }catch(PDOException $e){
        die($e->getMessage());
    }


}

$this->view('admin/user');
}
}




?>