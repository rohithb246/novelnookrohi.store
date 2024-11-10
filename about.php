<?php

include 'config.php';

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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="home.css">

</head>
<body>
   
<?php include 'home_header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>ABOUT US?</h3>
         <p>THIS NAME HAS A NOSTALGIC FEEL TO IT AND WOULD BE PERFECT FOR A WEBSITE THAT FOCUSES ON BOOK REVIEWS,RECOMMENDATIONS AND DISCUSSIONS ABOUT CLASSIC LITERATURE</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/barnes-noble-elliott.webp" alt="">
         <p>"I love this bookstore! It's huge and has a great selection of books. The staff is always helpful and friendly."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Barnes & Noble </h3>
      </div>

      <div class="box">
         <img src="images/Strand Bookstore.webp" alt="">
         <p> "This is my favorite bookstore in the world! The selection is amazing and you can always find a hidden gem. The staff is knowledgeable and helpful."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Strand Bookstore</h3>
      </div>

      <div class="box">
         <img src="images/Powell's City Of.jpg" alt="">
         <p>"This is a must-visit bookstore if you're ever in Portland. The selection is huge and the staff is always friendly and helpful. You can easily spend hours browsing."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Powell's City of Books </h3>
      </div>

      <div class="box">
         <img src="images/McNally Jackson Books.jpg" alt="">
         <p>"This is a great indie bookstore with a curated selection of books. The staff is knowledgeable and friendly, and they have a great selection of events and author talks."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>McNally Jackson Books</h3>
      </div>

      <div class="box">
         <img src="images/Shakespeare & Co.avif" alt="">
         <p>"This is a charming bookstore in Paris that's a must-visit for book lovers. The atmosphere is cozy and inviting, and the selection of books is excellent."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shakespeare & Co</h3>
      </div>

      <div class="box">
         <img src="images/Kinokuniya Bookstore.jpg" alt="">
         <p>"This is a fantastic bookstore in New York City that specializes in Japanese books and manga. The selection is amazing and the staff is knowledgeable."

</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kinokuniya Bookstore</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/J.K. Rowling.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>J.K. Rowling</h3>
      </div>

      <div class="box">
         <img src="images/stephen-king-8.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Stephen King</h3>
      </div>

      <div class="box">
         <img src="images/Toni Morrison.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Toni Morrison</h3>
      </div>

      <div class="box">
         <img src="images/gillian-flynn.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Gillian Flynn</h3>
      </div>

      <div class="box">
         <img src="images/george-r-r-martin-0415211.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>George R.R. Martin</h3>
      </div>

      <div class="box">
         <img src="images/Gabriel Garcia Marquez.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Gabriel Garcia Marquez</h3>
      </div>

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