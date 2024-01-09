<?php 
    class AppUser {
        private $userId;
        private $username;
        private $pw;
        private $email;
        private $userImg;
        private $created_at;


        public function __construct(){

        }
        public function getUserId(){
            return $this->userId;
        }
        public function setUserId($userId){
            $this->userId = $userId;
        }
        public function getUsername(){
            return $this->username;
        }
    
        public function setUsername($username){
            $this->username = $username;
        }
    
        // Getter and Setter for pw
        public function getPw(){
            return $this->pw;
        }
    
        public function setPw($pw){
            $this->pw = $pw;
        }
    
        // Getter and Setter for email
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            $this->email = $email;
        }
    
        // Getter and Setter for userImg
        public function getUserImg(){
            return $this->userImg;
        }
    
        public function setUserImg($userImg){
            $this->userImg = $userImg;
        }
    
        // Getter and Setter for created_at
        public function getCreatedAt(){
            return $this->created_at;
        }
    
        public function setCreatedAt($created_at){
            $this->created_at = $created_at;
        }
    }



?>