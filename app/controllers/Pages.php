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
        
        
        public function registration(){
           if(isset($_POST['addRegister'])){
            $userId = uniqid();
            $username = $_POST['username'];
            $pw = password_hash($_POST['pw'],PASSWORD_DEFAULT);
            $email = $_POST['email'];

            $userToAdd = new AppUser();
            $userToAdd->setUserId($userId);
            $userToAdd->setUsername($username);
            $userToAdd->setPw($pw);
            $userToAdd->setEmail($email);


            $roleOfUser = new RoleOfUser();
            $roleOfUser->setUser($userToAdd);
            $SecurityService = new SecurityServiceImp();
            $roleOfUserService = new RoleOfUserServicesImp();
            

            try{
                $SecurityService->register($userToAdd);
                $roleOfUserService->addRoleOfUser($roleOfUser); 
                header("Location:". URLROOT ."/pages/login"); 
            }catch(PDOException $e){
                die($e->getMessage());
            }

           }
            $this->view('pages/registration');
        }

        public function login() {
            if(isset($_POST["login"])){
                $username = $_POST["username"];
                $pw = password_verify($_POST["pw"],PASSWORD_DEFAULT);

                $logging = new AppUser();
                $logging->setUsername() = $username;
                $logging->setPw() = $pw;

                $securityService = new SecurityServiceImp();

                try {
                    $loggingUserData = $securityService->login($logging);
                    if($logging){
                        
                    }
                }
            }
        
            $this->view('pages/login');
        }
    }

?>