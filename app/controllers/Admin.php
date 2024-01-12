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


                                // FUNCTIONS GATEGORY

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

   public function displayCategory(){
    $categoryService = new CategoryServiceImp();
    try{
        $categories = $categoryService->displayCategory();
        echo json_encode($categories);
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
}

public function deleteCategory($categoryId) {
    $categoryService = new CategoryServiceImp(); 
    try {
        $categoryService->deleteCategory($categoryId);
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

    




                              // END CATEGORY FUNCTIONS




   public function wikis(){
    $this->view('admin/wikis');
   }



                                        // TAGS FUNCTIONS

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

   public function displayTag(){
    $tagService = new TagServiceImp();
    try {
        $tag = $tagService->displayTag();
        echo json_encode($tag);
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
}



                                            // END TAGS FUNCTIONS






                                            // USERS FUNCTIONS
   public function user(){
    if(isset($_POST["addUser"])){
    $userId = uniqid();
    $username = $_POST['username'];
    $pw = $_POST['pw'];
    $email = $_POST['email'];

    $userToAdd = new AppUser();
    $userToAdd->setUserId($userId);
    $userToAdd->setUsername($username);
    $userToAdd->setPw($pw);
    $userToAdd->setEmail($email);

    $role = new Role();
    $role->setRoleName("admin");

    $roleOfUser = new RoleOfUser();
    $roleOfUser->setUser($userToAdd);
    $roleOfUser->setRole($role);
    $userService = new UserServiceImp();
    $roleOfUserService = new RoleOfUserServicesImp();
    
    try {
        $userService->addUser($userToAdd);
        $roleOfUserService->addRoleOfUser($roleOfUser);
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
$this->view('admin/user');
}

    public function displayUser(){
        $usersService = new UserServiceImp();
        try {
            $users = $usersService->displayUser();
            echo json_encode($users);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }


                                            // END USERS FUNCTIONS



   

   
}




?>