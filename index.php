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
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
      <style>
   .navbar .navbar-collapse .login:hover{
     background-color: red;
     overflow: hidden;
     color: whitesmoke;
  }
      </style>
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
                              <a href="index.php"><img src="images/Tara-Guest-House-taraguesthouseLogo.jpeg" alt="Tara Guest" /></a>
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
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
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
                              <li class="nav-item login" style="background-color: whitesmoke;
     width: 72px;
     height: 30px;
     border-radius: 5px;
     display: flex;
     justify-content: center;
     align-items: center;">
                                 <a class=" login-btn" href="admin/index.php" style="color: rgb(221, 25, 25); display: flex; align-items: center;
                            padding: 20px;  text-align: center; height:30px; width:72px;">Login</a>
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
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/tara-guesthouse-slide4.jpg" alt="First slide">
                  <div class="container">
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/tara-guesthouse-slide2.jpg" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/tara-guesthouse-silde1.jpg" alt="Third slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="booking_ocline">
            <div class="container text-center">
               <div class="row">
                  <div class="col-md-5">
                     <div class="h1-slider-caption">
                        <h1 data-animation="fadeInUp" data-delay=".4s" class="" style="animation-delay: 0.4s; color: white; font-size: 58px; font-style: italic; font-weight: bold; font-family: 'Times New Roman', Times, serif; text-align: center; margin-left: 10px; letter-spacing:0.3; margin-top: -35%;">Tara Guest House</h1><span style="color:white;">Sauraha, Chitwan</span>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!--service-->

      <!--rooms-->

      <!--rooms-->
      
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p>Tara is an eco-travel-friendly guesthouse. We emphasize ethical tourism and Nepalese hospitality. We make your stay feel like a home with a cozy fresh room. </p>
                     <a class="read_more" href="about.php"> Read More</a>
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


      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Activities</h2>
                     <p>We have a wide range of activities available at our guest house for you to enjoy. </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/tara-guesthouse-junglewalk.jpg" alt="Jungle Walk"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Jungle Walk</h3>
                        <p>Venture into the forest with a seasoned guide, legs stretching with each step. 
                           Learn secrets of the wilderness, seeking rare and endemic wonders. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/tara-guesthoue-jeepsafari.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Jeep Safari</h3>
                        <p>The adventure takes you deep into the park, via well-worn paths, to witness incredible wildlife. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/tara-guesthouse-canoeTrip.jpg" alt="Canoe Trip"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Canoe Trip</h3>
                        <p>Embark on a thrilling canoe ride along the Rapti River, deep inside Chitwan National Park. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/tara-guesthouse-elephant-breeding.jpg" alt="Elephant Breeding Center"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Elephant Breeding Center</h3>
                        <p>Our naturalist will take you to the hattisar to demonstrate how elephants meals are prepared and how they eat in the elephant breeding center.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/tara-guest-house-tharustickdance1.jpg" alt="Tharu Stick Dance"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Tharu Stick Dance</h3>
                        <p>Savour the magnificient culture dance of the Tharu communities watching by the bone fire in the evening in any hotels of Sauraha. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/tara-guesthouse-village.jpg" alt="Tharu Stick Dance"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Buffer Zones Village Tours</h3>
                        <p>Experience the uniquely placed culture of the Tharu people relish what their culture is like in the Tharu Village Museum in the heart of Sauraha Bachhauli. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our_room -->
      <!-- gallery -->
      <div  class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>gallery</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/Tara-Guest-House-a.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/Tara-Guest-House-entrance.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/Tara-Guest-House-aa.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/Tara-Guest-House-Gallery.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/Tara-Guest-House-ee.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/Tara-Guest-House-river.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/Tara-Guest-House-bb.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/Tara-Guest-House-Peacock.jpg" alt="#"/></figure>
                  </div>
               </div>
              
              
             
             
               

               <div class="col-md-12">
               <div class="gallery_btn"> <a href="gallery.php" style="color: #fff;">See More</a></div>
            </div>
         </div>
      </div>
      <!-- end gallery -->
      
     
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
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:raj16sahi@gmail.com"> raj16sahi@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="about.php"> About</a></li>
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
                        <button type="submit" id="submit" name="submit" class="sub_btn">subscribe</button>
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
      <script src="css/reservation.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>