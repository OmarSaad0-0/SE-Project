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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hoodie.css">

 </head>

 <body>
     
    <?php  
    require APPROOT . '/views/includes/navigation.php';
    ?>

 <section class="Embroidery" id="Embroidery">
    <h1 class="heading"> <span>Embroidery</span> </h1>
    
    <div class="box-container">

        <div class="box">
            <img src="image/Inn.png" alt="">
            <h3>In</h3>
            <label><input type="checkbox" class="checke" /></label>
              
            
        </div>


        <div class="box">
            <img src="image/Out.png" alt="">
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

    <form method="post" action = "type.html" >    
        <input type="submit" value="back" class="btn1" >
    </form>

    <form method="post" action = "hood.html">    
        <input type="submit" value="next" class="btn" >
 </form>

   </section>

