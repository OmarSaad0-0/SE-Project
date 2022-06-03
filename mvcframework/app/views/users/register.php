<?php
   require APPROOT . '/views/includes/navigation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namera</title>

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/registerr.css">

    
</head>
<body>


    <br>
    <br>
    <br>


    
<div id="container">
    <div class="card1">
        

    <form action="<?php echo URLROOT; ?>/users/register" id="register-form" method="POST" class="login-form">
        
        <h1>Sign Up</h1>
            <p> See your growth and get consulting support! </p>
            <br>
            <div class ="form-group">
            <input type="Fname" placeholder="Firstname" name ="Fname" class = "Fname" placeholder="first name" ><br>
            <span class="invalidFeedback">
                <?php echo $data['FnameError']; ?>
           </span>
           </div>

            <br>
           
             <div class ="form-control">
            <input type="Lname" placeholder="last name" name= "Lname"class="Lname" ><br>
            <span class="invalidFeedback">
                <?php echo $data['LnameError']; ?>
</span>
</div>
        
            <br>
            <div class ="form-control">
                <input type="Company" placeholder="your company name" name="Bname" class="company" ><br>
                <span class="invalidFeedback">
                <?php echo $data['BnameError']; ?>
</span>
</div>

 <br>
 <div class ="form-control">
                <input type="int" placeholder="Phonenumber" name="Number" class="Phone" ><br>
            <span class="invalidFeedback">
                <?php echo $data['numberError']; ?>
</span>
</div>
<br>
<div class ="form-control">
                <input type="text" placeholder="your email" name= "Email" class="Email" ><br>
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
</span>
</div>
<br>
<div class ="form-control">
            <input type="password" placeholder="your password" name= "Password"  class="Password"><br>
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
</span>
</div>
<br>
            
            <div class ="form-control">
            <input type="password" placeholder="confirm password" name= "Cpassword"  class="CPassword" ><br>
            <span class="invalidFeedback">
                <?php echo $data['passwordError'];
                echo $data['confirmPasswordError'] ?>
        </span>    
        </div>

<br>

<br>
 <p>Forget your password <a href="#">click here</a></p>
                <p>Already Have an Account? <a href="<?php echo URLROOT; ?>/users/login">Login</a></p>

                <br>
                <br>
                <button type = "submit" class = "signupbuttom" href = "#" >Register</button>


            
        </form>
</div>


<div class = "card2">
    <div class = "slides">
        <!---- Radio buttons start-->
      <input type = "radio" name = "radio-btn" id = "radio1">
      <input type = "radio" name = "radio-btn" id = "radio2">
      <input type = "radio" name = "radio-btn" id = "radio3">
        <!---Radio buttons end-->
        <!--Slide image start-->
           <div class="box first"><img src= "/mvcframework/public/img/img1.jpg" alt="a balloon"></div>
           <div class="box "><img src="/mvcframework/public/img/img3.jpg" alt="a balloon"></div>
           <div class="box "><img src="/mvcframework/public/img/ATHLETIC WEAR.jpg" alt="a balloon"></div>
        <!--Slide image end-->

        <!--- Manual navigation start-->
        <div class = "navigation-manual">
            <label for="radio1" class = "manual-btn"></label> 
            <label for="radio2" class = "manual-btn"></label> 
            <label for="radio3" class = "manual-btn"></label> 

        </div>
       <!--- Manual navigation end-->



     
        
    </div>
   
   </div>

</div>






