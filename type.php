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
 <!--- type stars-->


 <section class="Type" id="Type">
    <h1 class="heading"> <span>Type</span> </h1>
    
    <div class="box-container">

        <div class="box">
            <img src="image/Type1.png" alt="">
           <br>
            <label><input type="checkbox" class="checkt" />Regular</label><br>
            <label><input type="checkbox" class="checkt" />Oversized</label><br>
            <label><input type="checkbox" class="checkt" />Cropped</label><br>

            <script>
                var checks = document.querySelectorAll(".checkt");
                var max4 = 1;
                for (var i = 0; i < checks.length; i++)
                  checks[i].onclick = selectiveCheck;
                  function selectiveCheck (event) {
                 var checkedChecks = document.querySelectorAll(".checkt:checked");
                 if (checkedChecks.length >= max4 + 1)
                   return false;
               }
               </script>
    
        </div>


        <div class="box">
            <img src="image/Type2.png" alt="">
            <br>
            <label><input type="checkbox" class="checktt" />Regular</label><br>
            <label><input type="checkbox" class="checktt" />Oversized</label><br>
            <label><input type="checkbox" class="checktt" />Cropped</label><br>
        

            <script>
                var checks = document.querySelectorAll(".checktt");
                var max4 = 1;
                for (var i = 0; i < checks.length; i++)
                  checks[i].onclick = selectiveCheck;
                  function selectiveCheck (event) {
                 var checkedChecks = document.querySelectorAll(".checktt:checked");
                 if (checkedChecks.length >= max4 + 1)
                   return false;
               }
               </script>
        </div>




        
    </div>

    
    <form method="post" action = "printing.html">    
        <input type="submit" value="back" class="btn1" >
 </form>

    <form method="post" action = "emb.html">    
        <input type="submit" value="next" class="btn" >
 </form>
 </section>
