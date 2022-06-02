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
 <!-- Sizing starts-->
     
 <section class="Sizing" id="Sizing">
    <h1 class="heading"> <span>Sizing</span> </h1>
    
    <div class="box-container">

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Numeric.jpeg" alt="">
            <h3>Numeric</h3>
            <label><input type="checkbox" class="checks" /></label>
              
            
        </div>


        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Alpha.jpeg" alt="">
            <h3>Alpha</h3>
            <label><input type="checkbox" class="checks" /> </label>
            
        </div>
   
     <script>
     var checks = document.querySelectorAll(".checks");
     var max2 = 1;
     for (var i = 0; i < checks.length; i++)
      checks[i].onclick = selectiveCheck;
      function selectiveCheck (event) {
     var checkedChecks = document.querySelectorAll(".checks:checked");
     if (checkedChecks.length >= max2 + 1)
       return false;
     }
      </script>
    </div>

    
    <form method="post" action = "<?php echo URLROOT; ?>/Pages/printing">    
        <input type="submit" value="next" class="btn" >
 </form>

   </section>
