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
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/hoodie.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">

 </head>


<body>
    <br><br><br><br>
<section class="Hood" id="Hood">
    <h1 class="heading"> <span>Hood</span> </h1>
    
    <div class="box-container">

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/1.jpeg" alt="">
            <h3>1</h3>
            <label><input type="checkbox" class="checkh" /></label>
              
            
        </div>


        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/2.jpeg" alt="">
            <h3>2</h3>
            <label><input type="checkbox" class="checkh" /> </label>
            
        </div>
   
     <script>
     var checks = document.querySelectorAll(".checkh");
     var max6 = 1;
     for (var i = 0; i < checks.length; i++)
      checks[i].onclick = selectiveCheck;
      function selectiveCheck (event) {
     var checkedChecks = document.querySelectorAll(".checkh:checked");
     if (checkedChecks.length >= max6 + 1)
       return false;
     }
      </script>


    </div>

    
      

 <input  onclick="myFunction()" type="submit" value="finish" class="btn" >

 <script>
 function myFunction() {
   alert("Thank you for choosing namera! We will contact you soon");
 }
 </script>

   </section>

   </body>