<?php

class Users {
    private int $userId;
    private string $userFullName;
    private string $userName;
    private string $userEmail;
    private string $userPassword;
    private string $userPhone;
    private string $userAddress;

    public function getUserId(){
        return $this->userId;
    }

    public function setUserId($userId){
        $this->userId = $userId;
    }

    public function getUserFullName(){
        return $this->userFullName;
    }

    public function setUserFullName($userFullName){
        $this->userFullName = $userFullName;
    }

    public function getUserName(){
        return $this->userName;
    }

    public function setUserName($userName){
        $this->userName = $userName;
    }

    public function getUserEmail(){
        return $this->userEmail;
    }

    public function setUserEmail($userEmail){
        $this->userEmail = $userEmail;
    }

    public function getUserPassword(){
        return $this->userPassword; 
    }

    public function setUserPassword($userPassword){
        $this->userPassword = $userPassword;
    }

    public function getUserPhone(){
        return $this->userPhone;
    }

    public function setUserPhone($userPhone){
        $this->userPhone = $userPhone;
    }

    public function getUserAddress(){
        return $this->userAddress;
    }

    public function setUserAddress($userAddress){
        $this->userAddress = $userAddress;
    }
}

?>