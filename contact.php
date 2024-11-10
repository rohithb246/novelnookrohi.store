<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="home.css">

</head>
<body>
   
<?php include 'home_header.php'; ?>

<div class="heading">
   <h3>contact us</h3>
   
   <p> <a href="home.php">home</a> / contact </p>
</div>

<section class="contact">

   <form action="" method="post">
      <h3>Request a book</h3>
      <input type="text" name="name" required placeholder="enter your name" class="box">
      <input type="email" name="email" required placeholder="enter your email" class="box">
      <input type="number" name="number" required placeholder="enter your number" class="box">
      <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>

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