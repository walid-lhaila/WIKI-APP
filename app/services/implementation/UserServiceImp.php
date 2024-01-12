<?php 
class UserServiceImp implements UserService {
    private Database $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }
    public function addUser(AppUser $user){
        $userToAddQuery = "INSERT INTO appUser VALUES (:userId, :username, :pw, :email, :userImg, NOW())";
        $this->db->query($userToAddQuery);
        $this->db->bind(":userId", $user->getUserId());
        $this->db->bind(":username", $user->getUsername());
        $this->db->bind(":pw", $user->getPw());
        $this->db->bind(":email", $user->getEmail());
        $this->db->bind(":userImg","téléchargement.jpg");

        try {
            $this->db->execute();
        }catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function displayUser(){
        $fetshAllUsersQuery = "SELECT * FROM appUser ORDER BY created_at DESC";
        $this->db->query($fetshAllUsersQuery);

        try {
            return $this->db->fetchMultipleRows();
        }catch(PDOException $e){
            die($e->getMessage());
        }

    }
    public function updateUser(AppUser $user){

    }
    public function deleteUser($userId){
        $deleteUserQuery = "DELETE FROM appUser WHERE userId = :userId";
        $this->db->query($deleteUserQuery);
        $this->db->bind(":userId",$userId);

        try {
            $this->db->execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }

    }
}


?>