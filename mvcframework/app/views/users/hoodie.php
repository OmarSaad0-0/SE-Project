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
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/hoodie.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">


 </head>
 
 
 
 
 
 <body>

 <!-- Header section ends -->


 <br>
 <br>
 <br>
 <br>

 <!--- Logo Placment Starts-->

 <section class="logo" id="logo">

    <h1 class="heading"> Logo <span>Placement</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Full front.png" alt="">
            <h3>Full Front Chest</h3>
            <label><input type="checkbox" class="checkl" /></label>
              
            
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Medium Front.jpg" alt="">
            <h3>Medium Front Chest</h3>
            <label><input type="checkbox" class="checkl" /> </label>   
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Small Front.jpg" alt="">
            <h3>Small Front Chest</h3>
            <label><input type="checkbox" class="checkl" /> </label>
            
        </div>

        
        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Acroos front chest.png" alt="">
            <h3>Acroos Front Chest</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Right Front Chest.jpeg" alt="">
            <h3>Right Front Chest</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Left Front Chest.jpeg" alt="">
            <h3>Left Front Chest</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>
        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Right Sleeve.jpeg" alt="">
            <h3>Right Sleeve</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Left Sleeve.jpeg" alt="">
            <h3>Left Sleeve</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Right Front Sleeve.jpeg" alt="">
            <h3>Right Front Sleeve</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>
        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Left Front Sleeve.jpeg" alt="">
            <h3>Left Front Sleeve</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>
        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Front Bottom Right.png" alt="">
            <h3>Front Bottom Right</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>
        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Front Buttom Left.png" alt="">
            <h3>Front Bottom Left</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>
        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Full Back.png" alt="">
            <h3>Full Back</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>
        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Medium Back.jpg" alt="">
            <h3>Medium Back</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>
        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Full front.png" alt="">
            <h3>Locker Patch Area</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>
        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Locker Patch Area.jpeg" alt="">
            <h3>Acroos Sholders</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>
   

    
           <!-- Java scrpit for have only two choices -->
        <script>
        var checks = document.querySelectorAll(".checkl");
          var max1 = 2;
        for (var i = 0; i < checks.length; i++)
          checks[i].onclick = selectiveCheck;
        function selectiveCheck (event) {
          var checkedChecks = document.querySelectorAll(".checkl:checked");
          if (checkedChecks.length >= max1 + 1)
            return false;
        }
        </script>

     
    </div>

    
    <form method="post" action = "<?php echo URLROOT; ?>/Pages/sizing">    
        <input type="submit" value="next" class="btn" >
 </form>
    </section>
  <!---- Logo Placment enda-->


 <br>
 <br>

     
    
 </body>
</html>

