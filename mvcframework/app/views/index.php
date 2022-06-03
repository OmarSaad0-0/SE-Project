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
    <link rel="stylesheet" href="http://localhost/MVCFRAMEWORK/public/css/style.css">

</head>
<body>
  <?php  
require APPROOT . '/views/includes/Nheader.php';
?>
<section class="home" id="home">

    <div class="content">
        <h3>Clothes Mean <span>Nothing</span> Until Someone Lives in Them</h3>
        
        <a href="<?php echo URLROOT; ?>/Pages/Select" class="btn">Get Started</a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Hoodies.jpeg" alt="">
            <h3>Make your own design</h3>
            
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/FreeD.jpeg" alt="">
            <h3>free delivery</h3>
            
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/EasyP.jpeg" alt="">
            <h3>easy payments</h3>
            
        </div>

    </div>

</section>

<!-- features section ends -->
<!-- products section ends -->

<!-- categories section starts  -->



<!-- categories section ends -->

<!-- review section starts  -->
<!---
<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="<?php echo URLROOT; ?>/public/img/JohnDoe.jpeg" alt="">
                <p>Review Content .</p>
                <h3>john </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
--->
<!-- custom js file link  -->
<script src="<?php echo URLROOT ?>/public/Js/script.js"></script>

<?php  
require APPROOT . '/views/includes/footer.php';
?>

</body>
</html>
