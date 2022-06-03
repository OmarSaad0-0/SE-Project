<?php  
require APPROOT . '/views/includes/navigation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <br><br><br><br>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namera</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">

</head>
<body>

   

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Athletic Wear.jpeg" alt="">
            <h3>Athletic Wear</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">Lets Go!</a>
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Hoodies.jpeg" alt="">
            <h3>Hood</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="<?php echo URLROOT; ?>/Pages/choose" class="btn">Lets Go!</a>
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/T-Shirts.jpeg" alt="">
            <h3>T-Shirts</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">Lets Go!</a>
        </div>

        
        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Sweatpants.jpeg" alt="">
            <h3>Sweatpants</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">Lets Go!</a>
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Polo.jpeg" alt="">
            <h3>POLO T-shirts</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">Lets Go!</a>
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Seniors.jpeg" alt="">
            <h3>Seniors Uniform</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">Lets Go!</a>
        </div>
        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Bucket.jpeg" alt="">
            <h3>Bucket Hats</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">Lets Go!</a>
        </div>

        <div class="box">
            <img src="<?php echo URLROOT; ?>/public/img/Boxers.jpeg" alt="">
            <h3>Boxers</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">Lets Go!</a>
        </div>

    </div>

</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>