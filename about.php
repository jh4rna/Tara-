<?php
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Tara Guest House</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/Tara-Guest-House-taraguesthouseLogo.jpeg" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/Tara-Guest-House-taraguesthouseLogo.jpeg" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="room.php">Our room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gallery.php">Gallery</a>
                              </li>
                              
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="reservation.php">Reservation</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>About Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                    
                     <p class="margin_0">Welcome to Tara guesthouse! It is situated at the corner of Chitwan National Park, surrounded by local villages and religious sites. Comfortable rooms with all the basic standard amenities are available at a very reasonable price. We serve local and seasonally available Nepali cuisine. We allow all the public areas to guests like gardens and trees where guests can set up their hammocks and backyard space for those who love yoga and meditation. On some occasions, we get chances to see wildlife like elephants, rhinos, deers, Wildboar, and some wild cat families as night visitors. </p>
                    <p>We promote Ethical tourism and encourage conscious consumerism from our guests when it comes to traveling, let’s make this world better together!</p>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/Tara-Guest-House-about.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
     

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Tara Guest House <br>
                           Sauraha, Chitwan, Nepal</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +977 9845792964</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> raj16sahi@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li ><a href="#">Home</a></li>
                        <li class="active"><a href="about.php"> About</a></li>
                        <li><a href="room.php">Our Room</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                      
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="reservation.php">Reservation</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>News letter</h3>
                     <form class="bottom_form" action="subscribe.php" method="post">
                        <input class="enter" placeholder="Enter your email" type="email" name="email" required>
                        <button type="submit" id="submit" name="submit"class="sub_btn">subscribe</button>
                     </form>
                     <ul class="social_icon">
                        <li><a href="https://www.facebook.com/profile.php?id=100057379422244"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/tara.guesthouse/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=%2B9779845792964&data=ARB7-8X78XOcjGt-wrb5HJ5K6E-k8E3htCQvodcqGaGO0oPDwQwMI7ntg4hvO0RgugV1UFGzNyhVGUBWWRgcjmplw4AXOvVPgSpdj6IfwgWvJce5kn2gDUaDs1kTzyfiyfiaufLfy4Dq1u-chy-fmHzyHw&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR1P-FGeSqrJZEJSpxnLEFmI2S9FiuQo-BXRQGNYxLSIAbOSmlO8FF_JVPY"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/@Raj16sahi"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="mailto:raj16sahi@gmail.com"><i class='fa fa-envelope' ></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>
                           All Rights Reserved © 2023 Tara Guest House 
                           <br><br>
                           Designed by <a href="https://tivrasoft.com/#" target="_blank">Tivrasoft</a>
                           </p>
                        
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>