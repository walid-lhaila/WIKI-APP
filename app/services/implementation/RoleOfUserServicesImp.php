<?php 
    class RoleOfUserServiceImp implements RoleOfUserService{
        private Database $db;

        public function __construct(){
            $this->db = Database::getInstance();
        }

        public function addRoleOfUser(RoleOfUser $roleOfUser){
            $addRoleOfUserQuery = "INSERT INTO roleOfuser VALUES (:userId, :roleName)";
            $this->db->query($addRoleOfUserQuery);
            $this->db->bind(":userId", $roleOfUser->getUser());
            $this->db->bind(":roleName", "author");

            try {
                $this->db->execute();
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

    }



?>