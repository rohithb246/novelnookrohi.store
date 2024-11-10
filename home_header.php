<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>




<header class="header">
<div class="flex">
<a href="home.php" class="logo">Chapter<span>One</span></a>



<nav class="navbar">
<a href="home.php">Home</a>
    <a href="about.php">About</a>
   
    <a href="shop.php">shop</a>
    <a href="contact.php">contact</a>
    <a href="orders.php">orders</a>
 


</nav>
<button id="toggleButton" class="fas fa-user" style="font-size: 2.5rem; background-color:#fff;padding:0%;margin:0%;cursor:pointer;"></button>
<div id="content" style="display:none;  position: absolute;
     top: 120%;
     font-size: 2rem;
    right: 2rem;
    background-color:#fff;
    width: 40rem;
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    padding: 2rem;">
<P>Username:<span><?php echo $_SESSION['user_name'];?></span></P>
<P>E-mail:<span><?php echo $_SESSION['user_email'];?></span></P>
<a href="logout.php" class="delete-btn">Logout</a>
<div>new <a href="login.php">login</a> | <a href="register.php">register</a></div>
</div>
<div class="icons">
   <div id="main-btn" class="fas fa-bars"></div>
   
   <a href="search_page.php" class="fas fa-search"></a>
  <div id="user-btn" class=""></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT `id`, `user_id`, `name`, `price`, `quantity`, `image` FROM `cart` WHERE 1") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>
  </div>

  

</div>
</header>

