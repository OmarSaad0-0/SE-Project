<?php

/*function invalidEmail($UserEmail)
{
    $Bug;
  if(!filter_var($UserEmail,FILTER_VALIDATE_EMAIL)
  {
    $Bug=true;
  }
  else
  {
    $Bug=FALSE;
  }
  return $Bug;
}*/

function passMatch($password,$passwordCon)
{
  $bug;
if ($password !== $passwordCon)
{
  $bug=true;
}
else
{
  $bug=false;
}
return $bug;
}


Function Email_Exists($conn,$Email)
{
 $sql="SELECT * FROM users WHERE User_Email= ?;";
 $stmt=mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql))
 {
    echo "Stmt Failed";
    exit();
 }

 mysqli_stmt_bind_param($stmt,"s",$Email);
 mysqli_stmt_execute($stmt);

 $result=mysqli_stmt_get_result($stmt);

 if($row=mysqli_fetch_assoc($result))
 {
   return $row;
 }
 else
 {
 $result=false;
 return $result;
 }
 mysqli_stmt_close();
}


function Create_User($conn,$FName,$LName,$BName,$UEmail,$UPassword,$UNumber)
{
$sql="INSERT INTO users (First_Name,Last_Name,Brand_Name,User_Email,User_Password,User_Number) VALUES (?,?,?,?,?,?);";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql))
{
  echo "Stmt Failed";
  exit(0);
}
 $Hashed_Pass=password_hash($UPassword,PASSWORD_DEFAULT);

 mysqli_stmt_bind_param($stmt,"sssssi",$FName,$LName,$BName,$UEmail,$Hashed_Pass,$UNumber);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);

 exit();
}


function loginUser($conn,$UserEmail,$userPassword)
{

  $userExist=Email_Exists($conn,$UserEmail);

  if($userExist ===false)
  {
    header("location: ../Login.php?error=InvalidLogin");
    exit();
  }

  $pwdHashed= $userExist["User_Password"];
  $checkpwd= password_verify($userPassword, $pwdHashed);

  if($checkpwd === false)
  {
    header("location: ../login.php?error=WrongPass");
    exit();
  }
  else if ($checkpwd === true)
  {
    session_start();
    $_SESSION["Id"] = $userExist["Id"];
    $_SESSION["User_Email"] =$userExist["User_Email"];

    header("location: ../Trial.php?error=TMAM");

  }

}