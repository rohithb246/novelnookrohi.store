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
<a href="admin_page.php" class="logo">Admin<span>Panel</span></a>



<nav class="navbar">
<a href="admin_page.php">Home</a>
    <a href="admin_products.php">Product</a>
    <a href="admin_orders.php">Order</a>
    <a href="admin_users.php">Users</a>
    <a href="#">Message</a>


</nav>
<div class="icons">
   <div id="main-btn" class="fas fa-bars"></div>
  <div id="user-btn" class="">
  </div>


</div>



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
<P>Username:<span><?php echo $_SESSION['admin_name'];?></span></P>
<P>E-mail:<span><?php echo $_SESSION['admin_email'];?></span></P>
<a href="logout.php" class="delete-btn">Logout</a>
<div>new <a href="login.php">login</a> | <a href="register.php">register</a></div>
</div>

</header>