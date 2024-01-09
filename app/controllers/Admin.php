<?php 
class Admin extends Controller {

    public function __construct(){

    }

   public function dashboard(){
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