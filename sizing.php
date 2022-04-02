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


 <!-- Sizing starts-->

     
 <section class="Sizing" id="Sizing">
    <h1 class="heading"> <span>Sizing</span> </h1>
    
    <div class="box-container">

        <div class="box">
            <img src="image/Numeric.jpg" alt="">
            <h3>Numeric</h3>
            <label><input type="checkbox" class="checks" /></label>
              
            
        </div>


        <div class="box">
            <img src="image/Alpha.png" alt="">
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

    <form method="post" action = "hoodie.html">    
        <input type="submit" value="back" class="btn1" >
 </form>
    <form method="post" action = "printing.html">    
        <input type="submit" value="next" class="btn" >
 </form>

   </section>
