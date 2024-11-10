<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_message = $conn->prepare("DELETE FROM `message` WHERE id = ?");
   $delete_message->execute([$delete_id]);
   header('location:admin_message.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>messages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="admin.css">

</head>
<body>

<?php include 'admin_header.php' ?>

<!-- messages section starts  -->

<section class="messages">

   <h1 class="heading">messages</h1>

   <div class="box-container">

   <?php
      $select_message = $conn->prepare("SELECT * FROM `message`");
      $select_message->execute();

      if($select_message->rowCount() > 0){
         while($fetch_messages = $select_messages->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
   <p> user_Id : <span><?= $fetch_message['user_id']; ?></span> </p>
      <p> Name : <span><?= $fetch_message['name']; ?></span> </p>
      <p> Contact Number : <span><?= $fetch_message['number']; ?></span> </p>
      <p> E-mail : <span><?= $fetch_message['email']; ?></span> </p>
      <p> Message : <span><?= $fetch_message['message']; ?></span> </p>
      <a href="contact.php?delete=<?= $fetch_message['id']; ?>" class="delete-btn" onclick="return confirm('delete this message?');">Delete</a>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">you have no messages</p>';
      }
   ?>

   </div>

</section>

<!-- messages section ends -->

SELECT `id`, `user_id`, `name`, `email`, `number`, `message` FROM `message` WHERE 1







<!-- custom js file link  -->
<script src="admin.js"></script>

</body>
</html>