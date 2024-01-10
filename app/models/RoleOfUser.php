<?php 
class RoleOfUser {
    private Role $role;
    private AppUser $user;

    public function __construct(){

    }

    public function getRole(){
        return $this->role;
    }

    public function setRole(Role $role){
        $this->role = $role;
    }

    // Getter and Setter for user
    public function getUser(){
        return $this->user;
    }

    public function setUser(AppUser $user){
        $this->user = $user;
    }
    
}


?>