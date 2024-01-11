<?php 

interface UserService {
    public function addUser(AppUser $user);
    public function displayUser();
    public function updateUser(AppUser $user);
    public function deleteUser($userId);
}

?>