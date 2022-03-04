<?php
if(isset($_POST['Login']))
{
  $userEmail=$_POST['Email'];
  $userPassword=$_POST['Password'];

  require_once "Db.int.php";
require_once "Functions.php";

  
  LoginUser($conn,$userEmail,$userPassword);
}
else
{
    header("location: ../Login.php");
    exit();
}