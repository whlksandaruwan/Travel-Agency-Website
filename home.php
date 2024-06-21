<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="new.css">

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
   </nav>
   <nav>
      <i class="fas fa-user" id="login-btn"></i>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background: url('New Photos/Srilanka\ 5.jpg') no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel around Sri Lanka</h3>
               <a href="packeges.html" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url('New Photos/Srilanka.jpg') no-repeat;">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="packeges.html" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url('New Photos/Srilanka\ 3.jpg') no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="packeges.html" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url('New Photos/Srilanka\ 6.jpg') no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>Find your perfect adventure</h3>
               <a href="packeges.html" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url('New Photos/Srilanka 2.jpg') no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>Your world awaits</h3>
               <a href="packeges.html" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section style="align-items: flex-start; display: flex;" class="home-about">

    <div class="image-test">
       <video style="width: 80%;" class="video-test" src="New Photos/About.mp4" autoplay muted></video>
    </div>
 
    <div class="content">
       <h3>about us</h3>
       <p>We are your dedicated travel experts, passionate about crafting unforgettable adventures tailored to your unique preferences. With years of experience and a deep love for exploration, we specialize in creating personalized itineraries that blend culture, adventure, and relaxation.</p>
       <a href="about.html" class="btn">read more</a>
    </div>
 
 </section>

<!-- home about section ends -->

<!-- home packeges section starts  -->

<section class="home-packeges">

   <h1 class="heading-title"> our packeges </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="New Photos/Kandy.jpg" alt="">
         </div>
         <div class="content">
            <h3>Kandy</h3>
            <p>Explore Kandy's stunning landscapes, rich culture, and unforgettable experiences today!</p>
            <br>
            <h2>Top Attractions:</h2>
            <p>Perandeniya Botanical Garden,
               Temple of the Tooth Relic,
               Kandy Lake,
               Udawattakele Forest Reserve,
               Royal Palace of Kandy,
               Kandy View Point,
               Ceylon Tea Museum,
               Ambuluwawa Tower
            </p>
            <h2><p>Price: Starting From </h2><h2>Rs.40,000</h2></p>
            <a href="book.html" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="New Photos/Ella.jpg" alt="">
         </div>
         <div class="content">
            <h3>Ella</h3>
            <p>Explore stunning landscapes, breathtaking destinations, and unforgettable beauty with Ella.</p>
            <br>
            <h2>Top Attractions:</h2>
            <p>Nine Arches Bridge,
               Ravana Falls,
               Ella Rock,
               Ceylon Tea Factory,
               Little Adam's Peak,
               Dhowa Rock Temple,
               Mahamevnawa Monastery,
               Demodara Railway Loop,
               Diyaluma Falls
            </p>
            <h2><p>Price: Starting From </h2><h2>Rs.50,000</h2></p>
            <a href="book.html" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="New Photos/Sigiriya.jpg" alt="">
         </div>
         <div class="content">
            <h3>Sigiriya</h3>
            <p>Experience Sigiriya's ancient wonder, panoramic views, and cultural heritage today!</p>
            <br>
            <h2>Top Attractions:</h2>
            <p>Sigiriya Rock Fortress,
               Pidurangala Rock,
               Dambulla Cave Temple,
               Minneriya National Park,
               Sigiriya Museum,
               Habarana Lake,
               Sigiriya Village Tour,
               Sigiriya Museum
               <br>
               <br>
            </p>
            <h2><p>Price: Starting From </h2><h2>Rs.40,000</h2></p>
            <a href="book.html" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="packeges.html" class="btn">load more</a> </div>

</section>

<!-- home packeges section ends -->

<!-- home banner image section starts  -->

<section class="home-banner">
   <div class="banner">
      <img src="New Photos/Banner home page.jpg" alt="Banner image">
    </div>
</section>

<!-- home banner image section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.html"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
         <a href="packeges.html"> <i class="fas fa-angle-right"></i> packeges</a>
         <a href="book.html"> <i class="fas fa-angle-right"></i> booking</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
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
         <a href="#"> <i class="fas fa-envelope"></i> TRAVELagency@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> 299 Gall Rd, Colombo 00300</a>
      </div>

   </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>