<?php

require "userController.php";
require "userModel.php";

class UserView{


function Display_Username($userName){

echo "Username: ";
echo $userName;
}



function Display_PhoneNumber($phoneNumber){

echo "Phone Number: ";
echo $phoneNumber;
}

function Display_UserEmail($userEmail){

    echo "Email: ";
    echo $userEmail;
    }




function Display_UserPassword($userPassword){

    echo "Password: ";
    echo $userPassword;
    }

function Display_CompanyType($companyType){

        echo "Company Type: ";
        echo $companyType;
        }
    }


