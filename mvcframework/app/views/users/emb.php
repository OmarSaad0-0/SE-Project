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

 <section class="Embroidery" id="Embroidery">
    <h1 class="heading"> <span>Embroidery</span> </h1>
    
    <div class="box-container">

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/in.jpeg" alt="">
            <h3>In</h3>
            <label><input type="checkbox" class="checke" /></label>
              
            
        </div>


        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/out .jpeg" alt="">
            <h3>Out</h3>
            <label><input type="checkbox" class="checke" /> </label>
            
        </div>
   
     <script>
     var checks = document.querySelectorAll(".checke");
     var max5 = 1;
     for (var i = 0; i < checks.length; i++)
      checks[i].onclick = selectiveCheck;
      function selectiveCheck (event) {
     var checkedChecks = document.querySelectorAll(".checke:checked");
     if (checkedChecks.length >= max5 + 1)
       return false;
     }


     
      </script>
    </div>

    

    <form method="post" action = "<?php echo URLROOT; ?>/Pages/hood">    
        <input type="submit" value="next" class="btn" >
 </form>

   </section>

