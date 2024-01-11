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
        $this->db->bind(":roleName", $roleOfUser->getRole()->getRoleName()); // Assuming getRoleName method in Role

        try {
            $this->db->execute();
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

}


?>