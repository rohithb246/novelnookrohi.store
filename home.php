
<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
   
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<link rel="Stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="Stylesheet" href="home.css">

</head>
<body>
<?php include 'home_header.php';?>




<section class="home">
   <div class="swiper mySwiper">
     <div class="swiper-wrapper">
<div class="swiper-slide slide" style="background:url(images/home-bg.jpg) no-repeat">
<div class="content">
<span>UP TO 50%OFF</span>
<h3>THE BEST SELLING BOOKS</h3>
<a href="shop.php" class="btn">Buy Now</a>
</div>
</div>
<div class="swiper-slide slide" style="background:url(images-home/pexels-lumn-309724.jpg) no-repeat">
<div class="content">
<span>BEST OFFERS</span>
<h3>LIMITED STOCKS</h3>
<a href="shop.php" class="btn">Buy Now</a>
</div>
</div>
<div class="swiper-slide slide" style="background:url(images-home/pexels-pixabay-159866.jpg) no-repeat">
<div class="content">
<span>AT LOWEST PRICES</span>
<h3>SPECIAL OFFERS</h3>
<a href="shop.php" class="btn">Buy Now</a>
</div>
</div>
<div class="swiper-slide slide" style="background:url(images-home/pexels-suzy-hazelwood-1526049.jpg) no-repeat">
<div class="content">
<span>BUY MORE BOOK AT DISCOUNT RATE</span>
<h3>GRUB THE OFFERS</h3>
<a href="shop.php" class="btn">Buy now</a>
</div>
</div>
</div>
   <div class="swiper-button-next" style="color:aliceblue;"></div>
    <div class="swiper-button-prev "style="color:aliceblue;"></div>
</div>
</section>

<section class="products">

   <h1 class="title">New Arrivals</h1>

   <div class="box-container">
   <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">Rs<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>ABOUT US</h3>
         <p>CHAPTERONE IS INDIA'S LARGEST AND CHEAPEST ONLINE BOOKSTORES OFFERING 40+MILLION SELECTIONS</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>HAVE A QUESTIONS?</h3>
      <p>ASK A QUESTION REGARDING BOOKS AND OFFERS </p>
      <a href="contact.php" class="white-btn">contact us</a>
   </div>

</section>
















<section class="footer">



<div class="box-container">

<div class="box">
    <h3>Quick link</h3>
    <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
 
    <a href="shop.php"><i class="fas fa-angle-right"></i>Book</a>
</div>
<div class="box">
    <h3>Extra link</h3>
    <a href="#"><i class="fas fa-angle-right"></i>Ask Question</a>
    <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
    <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
    <a href="#"><i class="fas fa-angle-right"></i>Terms and conditions</a>
</div>
<div class="box">
    <h3>Contact Info</h3>
    <a href="#"><i class="fas fa-phone"></i>+91-90199442</a>
    <a href="#"><i class="fas fa-phone"></i>+91-59356694</a>
    <a href="#"><i class="fas fa-envelope"></i>chapterone @gmail.com</a>
    <a href="#"><i class="fas fa-map"></i>Bangalore,India-560064</a>
</div>
<div class="box">
    <h3>Follow us</h3>
    <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
    <a href="#"><i class="fab fa-instagram"></i>instagram</a>
    <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
    <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
</div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
 <script src="script.js"></script>
</body>
</html>