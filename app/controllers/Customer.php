<?php 
class Customer extends Controller{
    public function __construct(){

    }
    public function home(){
        $this->view('customer/home');
    }
    

}

?>