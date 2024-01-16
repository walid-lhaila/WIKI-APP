<?php 
class Admin extends Controller {
    public function __construct(){
       
    }
   
 

   public function dashboard(){
    $securityService = new SecurityServiceImp();
    $securityService->checkForAdmin();  
    $wikiCountService = new WikiServiceImp();
    $userCountService = new UserServiceImp();
    $categoryCountService = new CategoryServiceImp();
    $tagCountService = new tagServiceImp();
    $tagCount = $tagCountService->countTags();
    $categoryCount = $categoryCountService->countCategory();
    $userCount = $userCountService->countUsers();
    $wikiCount = $wikiCountService->countWikis();

    $data = [
        'userCount' => $userCount,
        'wikiCount' => $wikiCount,
        'categoryCount' => $categoryCount,
        'tagCount' => $tagCount,
    ];

    $this->view('admin/dashboard', $data);
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
public function updateCategory(){
    if(isset($_POST["edit"])){
      $categoryId = $_POST["id"];
      $categoryName = $_POST["name"];
      $categoryDesc = $_POST["desc"];

      $categoryToUpdate = new Category();
      $categoryToUpdate->setCategoryId($categoryId);
      $categoryToUpdate->setCategoryName($categoryName);
      $categoryToUpdate->setCategoryDesc($categoryDesc);;
      $categoryService = new CategoryServiceImp();
      try{
       $categoryService->updateCategory($categoryToUpdate);
       $categories = $categoryService->displayCategory();
       echo json_encode($categories);
      }
      catch(PDOException $e){
       die($e->getMessage());
      }
    }
 }


public function deleteCategory($categoryId) {
    $categoryService = new CategoryServiceImp(); 
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['categoryId']) {
        $categoryId = $_POST['categoryId'];
        try {
            $categoryService->deleteCategory($categoryId);
            // Redirect to the page where you display categories after deletion
            header("Location: http://localhost/wiki/admin/displayCategory");
            exit();
        }catch(PDOException $e) {
            die($e->getMessage());
        }
        
    }
}
                              // END CATEGORY FUNCTIONS



                                        // TAGS FUNCTIONS

    public function deleteTag(){
        if(isset($_POST["delete"])){
            $tagService = new tagServiceImp();
            $id = $_POST["tagId"];
        try {
            $tagService->deleteTag($id);
            $tags = $tagService->displayTag();
            echo json_encode($tags);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        }
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

public function updateTag(){
    if (isset($_POST["edit"])) {
        $tagId = $_POST["id"];
        $tagName = $_POST["name"];
    
        $tagToUpdate = new Tag();
        $tagToUpdate->setTagId($tagId);
        $tagToUpdate->setTagName($tagName);
        $tagService = new TagServiceImp();
    
        try {
            $tagService->updateTag($tagToUpdate);
            $tags = $tagService->displayTag();
            echo json_encode($tags);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
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

    public function deleteUser(){
        if(isset($_POST["delete"])){
            $userService = new UserServiceImp();
            $id = $_POST["userId"];
        try {
            $userService->deleteUser($id);
            $users = $userService->displayUser();
            echo json_encode($users);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        }
    }

   




                                            // END USERS FUNCTIONS





    
                                            


   public function wikis(){
    if(isset($_POST['addWiki'])){
        $wikiId = uniqid();
        $title = $_POST['title'];
        $content = $_POST['content'];
        $wikiImg = $_POST['wikiImg'];
        $userId = $_POST['userId'];
        $categoryId = $_POST['categoryId'];

        $wikiToAdd = new Wiki();
        $wikiToAdd->setWikiId($wikiId);
        $wikiToAdd->setTitle($title);
        $wikiToAdd->setContent($content);
        $wikiToAdd->setWikiImg($wikiImg);
        $wikiToAdd->setUserId($userId);
        $wikiToAdd->setCategoryId($categoryId);

        $wikiService = new WikiServiceImp();

        try {
            $wikiService->addWiki($wikiToAdd);
        }catch(PDOException $e){
            die($e->getMessage());
        }




    }
    $this->view('admin/wikis');
   }

   public function displayWiki(){
    $wikiService = new WikiServiceImp();
    try {
        $wiki = $wikiService->displayWiki();
        echo json_encode($wiki);
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
   }

   public function deleteWiki(){
    if(isset($_POST["delete"])){
        $wikiService = new WikiServiceImp();
        $id = $_POST["wikiId"];
    try {
        $wikiService->deleteWiki($id);
        $wiki = $wikiService->displayWiki();
        echo json_encode($wiki);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    }


   }


   

   
}




?>