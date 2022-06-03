<?php
   require APPROOT . '/views/includes/navigation.php';
?>

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->

<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/login.css">
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
        <br>
        <br>
        <h1>Login</h1>
              <p> See your growth and get consulting support! </p>
              <br>
              <br>

               <div class ="form-group">
               <input type="text" placeholder="Email" name="email" class="Email" >
    
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>
            </div>
            <br>
            <br>
            <div class ="form-control">
            <input type="password" placeholder="Password" name="Pass" class="Password" >
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>
            </div>
            <br>
            <br>
            <br>

            <button type = "submit" value="Login" class = "log" href = "#" >Login</button>

            <br>
            <br>
            <br>
            <p>don't have an account <a href="<?php echo URLROOT; ?>/users/register">create now</a></p>
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


