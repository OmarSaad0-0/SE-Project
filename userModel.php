<?php 

        class User{

    public $userName;
    public $userID;
    public $userPhoneNumber;
    public $userEmail;
    public $userPassword;
    public $companyType;
    

    function set_userName($userName){

        $this->userName = $userName;
    }
    function set_userID($userID)
    {
        $this->userID = $userID;
    }

    function set_companyType($userPhoneNumber){
        $this->userPhoneNumber = $userPhoneNumber;
        }

    function set_userEmail($userEmail){
        $this->userEmail = $userEmail;
        }

    function set_userPassword($userPassword){
        $this->userPassword = $userPassword;
    }
    function set_UserCompanyType($companyType){
        $this->companyType = $companyType;
        }
        
    function get_userName(){

        return $this->userName;
    }


    function get_userID(){

        return $this->userID;
    }

    function get_userEmail(){

        return $this->userEmail;
    }

    function get_userPassword(){

        return $this->userPassword;
    }
    function get_userCompanyType(){

        return $this->companyType;
    }
    function get_userPhoneNumber(){

        return $this->userPhoneNumber;
    }
}