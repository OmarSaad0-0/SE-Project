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

 <!-- Header section ends -->


 <br>
 <br>
 <br>
 <br>

 <!--- Logo Placment Starts-->

 <section class="features" id="features">

    <h1 class="heading"> Logo <span>Placement</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/Full front.png" alt="">
            <h3>Full Front Chest</h3>
            <label><input type="checkbox" class="checkl" /></label>
              
            
        </div>

        <div class="box">
            <img src="image/Medium front.png" alt="">
            <h3>Medium Front Chest</h3>
            <label><input type="checkbox" class="checkl" /> </label>   
        </div>

        <div class="box">
            <img src="image/Small front.png" alt="">
            <h3>Small Front Chest</h3>
            <label><input type="checkbox" class="checkl" /> </label>
            
        </div>

        
        <div class="box">
            <img src="image/Acroos front chest.png" alt="">
            <h3>Acroos Front Chest</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>

        <div class="box">
            <img src="image/Right Front chest .png" alt="">
            <h3>Right Front Chest</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>

        <div class="box">
            <img src="image/Left Front Chest.png" alt="">
            <h3>Left Front Chest</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>
        <div class="box">
            <img src="image/Right Sleeve.png" alt="">
            <h3>Right Sleeve</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>

        <div class="box">
            <img src="image/Left Sleeve.png" alt="">
            <h3>Left Sleeve</h3>
            <label><input type="checkbox" class="checkl" /> Checkbox 8</label>
        </div>

        <div class="box">
            <img src="image/Right Front Sleeve.png" alt="">
            <h3>Right Front Sleeve</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>
        <div class="box">
            <img src="image/Left Front Sleeve.png" alt="">
            <h3>Left Front Sleeve</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>
        <div class="box">
            <img src="image/Front Bottom Right.png" alt="">
            <h3>Front Bottom Right</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>
        <div class="box">
            <img src="image/Front Buttom Left.png" alt="">
            <h3>Front Bottom Left</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>
        <div class="box">
            <img src="image/Full Back.png" alt="">
            <h3>Full Back</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>
        <div class="box">
            <img src="image/Medium Back.png" alt="">
            <h3>Medium Back</h3>
            <label><input type="checkbox" class="checkl" /> </label>
        </div>
        <div class="box">
            <img src="image/Locker Patch Area.png" alt="">
            <h3>Locker Patch Area</h3>
            <label><input type="checkbox" class="checkl" /></label>
        </div>
        <div class="box">
            <img src="image/Acroos Sholders.png" alt="">
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

    <form method="post" action = "select.html">    
        <input type="submit" value="back" class="btn1" >
 </form>
    <form method="post" action = "sizing.html">    
        <input type="submit" value="next" class="btn" href = "sizing.html">
 </form>
    </section>
  <!---- Logo Placment enda-->


 <br>
 <br>

     
    
 </body>
</html>

