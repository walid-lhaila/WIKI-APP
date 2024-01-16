<?php 
class Customer extends Controller{
    public function __construct(){

    }
    public function home(){
        $this->view('customer/home');
    }

    public function addWiki(){
        if(isset($_POST["add"])){
        $wikiId = uniqid();
        $title = $_POST['title'];
        $content = $_POST['content'];
        $userId = $_SESSION['userId'];
        $categoryId = $_POST['categoryId'];

        $user = new AppUser();
        $user->setUserId($userId);
        $category = new Category();
        $category->setCategoryId($categoryId);

        $wikiToAdd = new Wiki();
        $wikiToAdd->setWikiId($wikiId);
        $wikiToAdd->setTitle($title);
        $wikiToAdd->setContent($content);
        $wikiToAdd->setUserId($user);
        $wikiToAdd->setCategoryId($category);

        

        $wikiService = new WikiServiceImp();
            try{
                $wikiService->addWiki($wikiToAdd);
                $tagsOfWikiService = new TagsOfWikiServiceImp();
                foreach($_POST["tags"] as $tagId){
                    $tag = new Tag();
                    $tag->setTagId($tagId);
                    $tagsOfWikiService->addTagsOfWiki($wikiToAdd,$tag);
                }   
                echo json_encode("done");
            }    
            catch(PDOException $e){
                die($e->getMessage());
            }                
        }

        $this->view('customer/AddWiki');
                        
    }

    public function wikisOfAuthor(){
        $this->view('customer/wikisOfAuthor');

    }

    public function displayWiki(){
        $this->view('customer/displayWiki');
    }



    public function displayWikisOfAuthor(){
        $wikiService = new WikiServiceImp();
        try{
            $wikis = $wikiService->displayWikiOfAuthor($_SESSION["userId"]);
            echo json_encode($wikis);
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function deleteWiki(){
        // $wikiService = new WikiServiceImp();

        // // var_dump($_POST['id']);
        // $wikis = $wikiService->displayWikiOfAuthor($_SESSION["userId"]);

         if(isset($_POST["delete"])){
            $id = $_POST["id"];
            $wikiService = new WikiServiceImp();
            $wikiService->deleteWiki($id);
            $wikis = $wikiService->displayWikiOfAuthor($_SESSION["userId"]);
            echo json_encode($wikis);
                   
         }
    }
    
    public function index(){
        $securityService = new SecurityServiceImp();
        $securityService->checkForAuthor();
        
        $this->view("customer/home");
    }
    }


?>