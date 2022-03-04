<?php


if(isset($_POST['register']))
{
$F_Name=$_POST['Fname'];
$L_Name=$_POST['Lname'];
$User_Email=$_POST['Email'];
$User_Mobile=$_POST['Mobile'];
$Brand_Name=$_POST['Brname'];
$User_Pass=$_POST['Pass'];
$PassConfirm=$_POST['Passcon'];

require_once "Db.int.php";
require_once "Functions.php";

if(passMatch($User_Pass,$PassConfirm) !==false)
{
  header("location: ../Signup.php?error=passworddontmatch");
  exit();
}


Create_User($conn,$F_Name,$L_Name,$Brand_Name,$User_Email,$User_Pass,$User_Mobile);

}
else 
{
header("location: ../Signup.php");
exit();
}
 
