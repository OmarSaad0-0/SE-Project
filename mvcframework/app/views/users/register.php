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

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/sign up.css">

    
</head>
<body>


    <br>
    <br>
    <br>

<div id="container">
    <div class="card1">
        

            <form
                id="register-form"
                method="POST"
                action="<?php echo URLROOT; ?>/users/register"
                class="login-form"
                >
                <h2>Register</h2>
            <input type="Fname" placeholder="Firstname" name ="Fname" class="box"><br>
            <span class="invalidFeedback">
                <?php echo $data['FnameError']; ?>
            </span>


            <input type="Lname" placeholder="last name" name= "Lname"class="box"><br>
            <span class="invalidFeedback">
                <?php echo $data['LnameError']; ?>




                <input type="Company" placeholder="your company name" name="Bname" class="box"><br>
            <span class="invalidFeedback">
                <?php echo $data['BnameError']; ?>



                <input type="Phone" placeholder="Phonenumber" name="Number" class="box"><br>
            <span class="invalidFeedback">
                <?php echo $data['numberError']; ?>


                <input type="Email" placeholder="your email" name= "Email" class="box"><br>
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>

            <input type="password" placeholder="your password" name= "Password"  class="box"><br>
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <input type="password" placeholder="confirm password" name= "Cpassword"  class="box"><br>
            <span class="invalidFeedback">
                <?php echo $data['passwordError'];
                echo $data['confirmPasswordError'] ?>
            </span>


            <p>Forget your password <a href="#">click here</a></p>
                <p>Already Have an Account? <a href="<?php echo URLROOT; ?>/users/login">Login</a></p>
                <input type="submit" value="sign Up" class="btn">
           
        </form>
    </div>
</div>

