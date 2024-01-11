<?php 

class SecurityServiceImp implements SecurityService{
    private Database $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function register(AppUser $user){
        $registerQuery = "INSERT INTO appUser VALUES (:userId, :username, :pw, :email, :userImg, NOW())";
        $this->db->query($registerQuery);
    
        $this->db->bind(":userId", $user->getUserId());
        $this->db->bind(":username", $user->getUsername());
        $this->db->bind(":pw", $user->getPw());
        $this->db->bind(":email", $user->getEmail());
        $this->db->bind(":userImg", "téléchargement.jpg");
    
        try {
            $this->db->execute();
            
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function login(AppUser $user){
        $loginQuery = "SELECT * FROM appUser WHERE username = :username AND pw = :pw";
        $this->db->query($loginQuery);
        $this->db->bind(":username", $user->getUsername());
        $this->db->bind(":pw", $user->getPw());
        try {
            return $this->db->fetchOneRow();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function checkForRole($userId){
        $checkForRoleQuery = "SELECT * FROM roleOfUser WHERE userId = :userId";
        $this->db->query($checkForRoleQuery);
        $this->db->bind(":userId", $userId);
        try {
            return $this->db->fetchOneRow();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function checkForAdmin(){
        if(empty($_SESSION["roleName"])){
            header("location:".URLROOT);
        }
        else if($_SESSION["roleName"] === "author"){
            header("location:".URLROOT."/customer/home");
        }
    }

    public function checkForAuthor(){
        if(empty($_SESSION["roleName"])){
            header("location:".URLROOT);
    }else if ($_SESSION["roleName"] === "admin"){
            header("location:".URLROOT."/admin/dashboard");
    }
}

}

?>