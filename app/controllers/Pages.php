<?php

    class Pages extends Controller{
        public $userModel;
        public function __construct()
        {

        }
        public function index() {

            $data = [
                'title' => 'You Welcomee to Our Website',

            ];

            
            $this->view('pages/index' , $data );
        }
        
        public function login(){
            $this->view('pages/login');
        }
        public function registration(){
           if(isset($_POST['addRegister'])){
            $db = Database::getInstance();
            $userId = uniqid();
            $username = $_POST['$username'];
            $pw = $_POST['$pw'];
            $email = $_POST['$email'];

            $userToAdd = new AppUser();
            $userToAdd->setUserId($userId);
            $userToAdd->setUsername($username);
            $userToAdd->setPw($pw);
            $userToAdd->setEmail($email);

            $SecurityService = new SecurityServiceImp();
            $SecurityService->register($userToAdd);


            $roleOfUser = new RoleOfUser();
            $roleOfUser->setUser($userToAdd);
           }
            $this->view('pages/registration');
        }
    }

?>