<?php 
class Role {
    private $roleName;
    public function __construct(){

    }
    public function getRolName(){
        return $this->roleName;
    }
    public function setRoleName($roleName){
        $this->roleName = $roleName;
    }   
}



?>