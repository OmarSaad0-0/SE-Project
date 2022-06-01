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

<body>        <!-- Printing start-->
        <section class="Printing" id="Printing">
            <h1 class="heading"> <span>Printing</span> </h1>
            
            <div class="box-container">
        
                <div class="box">
                    <img src="<?php echo URLROOT; ?>/public/img/Emb.jpeg" alt="">
                    <h3>Embroidery</h3>
                    <label><input type="checkbox" class="checkp" /></label>
                      
                    
                </div>
        
        
                <div class="box">
                    <img src="<?php echo URLROOT; ?>/public/img/Sublimation.jpeg" alt="">
                    <h3>Sublimation</h3>
                    <label><input type="checkbox" class="checkp" /> </label>
                    
                </div>

                <div class="box">
                    <img src="<?php echo URLROOT; ?>/public/img/Digital.jpeg" alt="">
                    <h3>Digital</h3>
                    <label><input type="checkbox" class="checkp" /> </label>
                    
                </div>
                <div class="box">
                    <img src="<?php echo URLROOT; ?>/public/img/ScPrint.jpeg" alt="">
                    <h3>Screen Printing</h3>
                    <label><input type="checkbox" class="checkp" /> </label>
                    
                </div>
                <div class="box">
                    <img src="<?php echo URLROOT; ?>/public/img/DigitalTransfer.jpeg" alt="">
                    <h3>Digital Transfer</h3>
                    <label><input type="checkbox" class="checkp" /> </label>
                    
                </div>
                <div class="box">
                    <img src="<?php echo URLROOT; ?>/public/img/VP.jpg" alt="">
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

            
            <form method="post" action = "<?php echo URLROOT; ?>/Pages/type">    
                <input type="submit" value="next" class="btn" >
         </form>
        </section>

</body>
</html>