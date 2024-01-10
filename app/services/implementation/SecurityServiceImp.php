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
}


?>