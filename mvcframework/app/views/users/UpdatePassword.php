
    
<?php
require APPROOT . '/views/includes/navigation.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css%22%3E">


<!-- custom css file link  -->

<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/updatepass.css">
</div>
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body>


<div id ="container">
    <div class="card1">


        
    <form action="<?php echo URLROOT; ?>/users/UpdatePassword" id="register-form" method ="POST" class="login-form">
    <br>
    <br>
    <h2>Change Password <h2>
            <br>
            <br>
            <div class ="form-control">
        <input type="password" placeholder="new password" name="Password" id = "Password" class="password" >

            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>
            </div>

            <br>
            <br>
            <div class ="form-control">
            <input type="password" placeholder="confirm new password" name="Confirmpass" id ="Confirmpass"  class="cpassword" >
            <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
            </span>
            </div>

            <br>
            <br>
            <button type = "submit" value="Save" class = "log" href = "#" >save</button>



        </form>

    </div>
</div>
</body>
