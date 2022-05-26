
<?php
   require APPROOT . '/views/includes/navigation.php';
?>

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->

<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/sign up.css">
</div>
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


<div id ="container">
    <div class="card1">
        

        <form action="<?php echo URLROOT; ?>/users/login" id="register-form" method ="POST" class="login-form">
        <h2>Login <h2>  
            <div class ="form-group">
      Email:   <input type="text" placeholder="Email" name="email" class="form-control" >
    
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>
            </div>
            <div class ="form-control">
         Password:    <input type="password" placeholder="Password" name="Pass" class="form-control" >
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>
            </div>

            <input type="submit" value="Login" class="btn">

            <p>don't have an account <a href="<?php echo URLROOT; ?>/users/register">create now</a></p>
        </form>
    </div>
</div>


=======
<?php
   require APPROOT . '/views/includes/navigation.php';
?>
Mora@gmail.com

</div>
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


<div class="container-login">
    <div class="wrapper-login">
        <h2>Sign in out out out <h2>

        <form action="<?php echo URLROOT; ?>/users/login" method ="POST" class="login-form">
            <input type="text" placeholder="Email" name="email" class="box">
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>

            <input type="password" placeholder="Password" name="Pass" class="box">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <button id="submit" type="submit" value="Login! " name='Submit' class="btn"></button>

            <p>don't have an account <a href="<?php echo URLROOT; ?>/users/register">create now</a></p>
        </form>
    </div>
</div>



