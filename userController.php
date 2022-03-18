<?php

require "userView.php";
require "userModel.php";
class UserController{


     public $view;
     public $model;

    
    

    function __construct($view, $model){

        $this->view = $view;
        $this->model = $model;

    }

    

    function setUserName($name){

        $model->set_userName($name);
    }

    function setUserEmail($Email){

        $model->set_userEmail($Email);
    }

    function setUserID($ID){

        $model->set_userID($ID);
    }

    function setUserPhoneNumber($phone){

        $model->set_userPhoneNumber($phone);
    }

    function setCompanyType($cptype){

        $model->set_companyType($cptype);
    }

    function setUserPassword($pw){

        $model->set_userPassword($pw);
    }

}

