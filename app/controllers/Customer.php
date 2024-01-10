<?php 
class Customer extends Controller{
    public function __construct(){

    }
    public function home(){
        $this->view('customer/home');
    }
    

        public function index(){
            $securityService = new SecurityServiceImp();
            $securityService->checkForAuthor();
           
           $this->view("customer/home");
        }
    }


?>