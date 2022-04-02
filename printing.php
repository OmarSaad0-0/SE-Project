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
    <!-- Printing start-->
        <section class="Printing" id="Printing">
            <h1 class="heading"> <span>Printing</span> </h1>
            
            <div class="box-container">
        
                <div class="box">
                    <img src="image/Embroidery.png" alt="">
                    <h3>Embroidery</h3>
                    <label><input type="checkbox" class="checkp" /></label>
                      
                    
                </div>
        
        
                <div class="box">
                    <img src="image/Sublimation.png" alt="">
                    <h3>Sublimation</h3>
                    <label><input type="checkbox" class="checkp" /> </label>
                    
                </div>

                <div class="box">
                    <img src="image/Digital.png" alt="">
                    <h3>Digital</h3>
                    <label><input type="checkbox" class="checkp" /> </label>
                    
                </div>
                <div class="box">
                    <img src="image/Screen Printing.png" alt="">
                    <h3>Screen Printing</h3>
                    <label><input type="checkbox" class="checkp" /> </label>
                    
                </div>
                <div class="box">
                    <img src="image/Digital Transfer.png" alt="">
                    <h3>ADigital Transfer</h3>
                    <label><input type="checkbox" class="checkp" /> </label>
                    
                </div>
                <div class="box">
                    <img src="image/Vinyl Printing.png" alt="">
                    <h3>Vinyl Printing</h3>
                    <label><input type="checkbox" class="checkp" /> </label>
                    
                </div>
           
            <script>
            var checks = document.querySelectorAll(".checkp");
            var max3 = 1;
            for (var i = 0; i < checks.length; i++)
              checks[i].onclick = selectiveCheck;
              function selectiveCheck (event) {
             var checkedChecks = document.querySelectorAll(".checkp:checked");
             if (checkedChecks.length >= max3 + 1)
               return false;
           }
           </script>
            </div>

            <form method="post" action = "sizing.html">    
                <input type="submit" value="back" class="btn1" >
         </form>
            <form method="post" action = "type.html">    
                <input type="submit" value="next" class="btn" >
         </form>
        </section>

</body>
</html>