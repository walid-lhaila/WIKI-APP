<?php 
   class RoleOfUserServicesImp implements RoleOfUserServices {
    private Database $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function addRoleOfUser(RoleOfUser $roleOfUser){
        $addRoleOfUserQuery = "INSERT INTO roleOfuser (userId, roleName) VALUES (:userId, :roleName)";
        $this->db->query($addRoleOfUserQuery);
        $this->db->bind(":userId", $roleOfUser->getUser()->getUserId()); // Assuming getUserId method in AppUser
        $this->db->bind(":roleName", "author"); // Assuming getRoleName method in Role

        try {
            $this->db->execute();
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function AddRoleOfAdmin(RoleOfUser $roleOfAdmin){
        $addRoleOfAdminQuery = "INSERT INTO roleofuser (userId, roleName) VALUES (:userId, :roleName)";
        $this->db->query($addRoleOfAdminQuery);
        $this->db->bind(":userId", $roleOfAdmin->getUser()->getUserId());
        $this->db->bind(":roleName", "admin");

        try{
            $this->db->execute();

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}


?>