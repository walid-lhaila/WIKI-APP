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
   }
   public function wikis(){
    $this->view('admin/wikis');
   }
   public function tags(){
    $this->view('admin/tags');
   }



}




?>