<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>At our coffee shop, every cup is crafted with care, using fresh, high-quality beans and a passion for flavor. We offer a cozy space, friendly service, and a menu full of your favorite brews and bites. Whether you're here to relax, work, or catch up with friends, we make sure you feel welcome—because great coffee deserves a great experience..</p>
            <a href="shop.php" class="btn">Order now</a>
        </div>

    </div>



<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>