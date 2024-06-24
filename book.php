<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "book_db";
$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
//Handle from submission
if($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $sql = "INSERT INTO `book`(`name`, `email`, `phone`, `address`, `location`, `guests`, `arrival`, `leaving`) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

   if ($conn->query($sql) === TRUE) {
      echo "Booking successful!";
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/new.css">
</head>
<body>
   
<!-- header section starts  -->
 
<section class="header">

   <a href="home.html" class="logo">
      <img src="New Photos/logo.png" alt="Logo" />
   </a>

   <nav class="navbar">
      <a href="home.html">home</a>
      &nbsp; &nbsp; &nbsp; &nbsp;
      <a href="about.html">about</a>
      &nbsp; &nbsp; &nbsp; &nbsp;
      <a href="packeges.html">packeges</a>
      &nbsp; &nbsp; &nbsp; &nbsp;
      <a href="book.html">booking</a>
      &nbsp; &nbsp; &nbsp; &nbsp;
      <a href="contact.html">contact</a>
   </nav>
   
   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Book now</h1>
</div>

<!-- booking section starts  -->
<section class="booking">
   <h1 class="heading-title">Book your trip!</h1>
   
   <?php
   if (!empty($success_msg)) {
      foreach ($success_msg as $msg) {
         echo '<div class="success">' . $msg . '</div>';
      }
   }
   if (!empty($error_msg)) {
      foreach ($error_msg as $msg) {
         echo '<div class="error">' . $msg . '</div>';
      }
   }
   ?>

   <form action="book.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="Enter your name" maxlength="30" name="name" required>
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" maxlength="50" placeholder="Enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="text" maxlength="10" placeholder="Enter your number" name="phone" required>
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" maxlength="50" placeholder="Enter your address" name="address" required>
         </div>
         <div class="inputBox">
            <span>Where to :</span>
            <input type="text" placeholder="Place you want to visit" name="location" maxlength="50" required>
         </div>
         <div class="inputBox">
            <span>How many :</span>
            <input type="number" min="1" max="99" maxlength="2" placeholder="Number of guests" name="guests" required>
         </div>
         <div class="inputBox">
            <span>Arrivals :</span>
            <input type="date" name="arrivals" required>
         </div>
         <div class="inputBox">
            <span>Leaving :</span>
            <input type="date" name="leaving" required>
         </div>
      </div>
      <input type="submit" value="Submit" class="btn" name="send">
   </form>
</section>
<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">
<div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.html"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
         <a href="packeges.html"> <i class="fas fa-angle-right"></i> packeges</a>
         <a href="book.html"> <i class="fas fa-angle-right"></i> booking</a>
         <a href="contact.html"> <i class="fas fa-angle-right"></i> contact</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="Contact.html"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="about.html"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>
      
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +94 76 121 8033 </a>
         <a href="#"> <i class="fas fa-phone"></i> +94 11 333 2445 </a>
         <a href="#"> <i class="fas fa-envelope"></i> travelagency2003@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> 299 Gall Rd, Colombo 00300</a>
      </div>

   </div>

</section>

<!-- footer section ends -->






<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

<?php
if(isset($success_msg)){
   foreach($success_msg as $success_msg){
      echo '<script>swal("'.$success_msg.'", "", "success");</script>';
   }
}
?>

</body>
</html>