<?php 
interface SecurityService {
    public function register(AppUser $user);
    public function login(AppUser $user);
    public function chckForRole($userId);
}

?>