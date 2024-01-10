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

        public function login(){
            if (isset($_POST['login'])) {
                // Handle user login logic here
                $username = $_POST['username'];
                $password = $_POST['pw'];
    
                $userToLogin = new AppUser();
                $userToLogin->setUsername($username);
                $userToLogin->setPw($password);
    
                $securityService = new SecurityServiceImp();
                $userData = $securityService->login($userToLogin);
    
                if ($userData) {
                    // Login successful, redirect based on role
                    $user = $userData['user'];
                    $role = $userData['role'];
    
                    if ($role->getRoleName() === 'author') {
                        header("Location: " . URLROOT . "/customer/home");
                        exit;
                    } elseif ($role->getRoleName() === 'admin') {
                        header("Location: " . URLROOT . "/admin/dashboard");
                        exit;
                    }
                } else {
                    // Invalid login, handle accordingly
                    // You may want to set an error message and display it in your login view
                    $data = [
                        'error' => 'Invalid username or password',
                    ];
                    $this->view('pages/login', $data);
                    exit;
                }
            }




            $this->view('pages/login');
        }
    }

?>