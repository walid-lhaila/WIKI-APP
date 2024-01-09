<?php 
class Customer extends Controller{
    public function __construct(){

    }
    public function home(){
        $this->view('customer/home');
    }
    public function login(){
        $this->view('customer/login');
    }
    public function registration(){
        $this->view('customer/registration');
    }

}

?>