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
   <title>shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="home.css">

</head>
<body>
   
<?php include 'home_header.php'; ?>

<div class="heading">
   <h3>Our shop</h3>
   <p> <a href="home.php">Home</a> / Shop </p>
</div>

<section class="products">

   <h1 class="title">Now Trending</h1>

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

<!-- custom js file link  -->
<script src="admin.js"></script>

</body>
</html>