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
   </head>
      <!-- body -->
      <body class="main-layout">
        <!-- loader  -->
        <div class="loader_bg">
           <div class="loader"><img src="images/loading.gif" alt="#"/></div>
        </div>
        <!-- end loader -->
       
        
           <!-- header inner -->
           <header style="margin: 0;">
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
                                <li class="nav-item">
                                   <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="room.php">Our room</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="gallery.php">Gallery</a>
                                </li>
                                
                                <li class="nav-item ">
                                   <a class="nav-link" href="contact.php">Contact Us</a>
                                </li>
                                <li class="nav-item active">
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
                   <h2>Reservation</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--  contact -->
   <div class="container" style="margin-top: 10px;">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <form id="request" class="main_form" method="post" action="reservation.php">
               <div class="row">
                  <div class="col-md-12">
                     <input class="contactus" placeholder="First Name" type="text" name="Fname" required> 
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Last Name" type="text" name="Lname" required> 
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Email" type="email" name="email" required> 
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Phone Number" type="number" name="Pnumber" required>                          
                  </div>
                   <div class="col-md-12">
                     <label for="checkin" style="color:black !important; font-size: 18px !important;">Check in:</label>
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Check in" type="date" name="arrival" required>
                  </div>
                  <div class="col-md-12">
                     <label for="checkin" style="color:black !important; font-size: 18px !important;">Check out:</label>
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Check in" type="date" name="departure" required>
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Adults" type="number" name="Guest" required>
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Child" type="number" name="cGuest" >
                  </div>
                  <div class="col-md-12">
                     <select id="input-group" id="roomtype" name="Roomtype" class="contactus">
                        <option value="Room Type">Room Type</option>
                        <option value="Deluxe Room">Deluxe Room</option>
                        <option value="Single Bed">Single Bed</option>
                        <option value="Double Bed">Double Bed</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                     <button type="submit" name="submit" class="send_btn">Send</button>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-2"></div>
         </div>
         </div>
      <!-- end header -->
      <!--
      <section style="background-image: url(images/tara-guesthouse-slide2.jpg); height: 900px; background-repeat: no-repeat; margin-bottom: -20%; overflow: hidden; display: flex; justify-content: center;">
         <div class="container">
             <form class="form-group" style="position: absolute; display: flex; align-items: center; justify-content: center;" method="post" action="reservation.php">
                 <div id="form">
                     <h1 class="text-white text-center" style="padding: 10px; margin-bottom: -20px;font-weight: bold;font-family: 'Times New Roman', Times, serif;">Reservation Booking Form</h1>
     
                     <div id="first-group">
     
                         <div id="content">
                             <i class="fa fa-user" aria-hidden="true"></i>
                             <input type="text" id="input-group" placeholder="First name" name="Fname">
                         </div>
     
                         <div id="content">
                             <i class="fa fa-phone" aria-hidden="true"></i>
                             <input type="number" id="input-group" placeholder="Phone number"name="Pnumber">
                         </div>
                         <div id="content">
                             <i class="fa fa-calendar" aria-hidden="true"></i>
                             <input type="text" id="input-group" placeholder="Arrival Date" name="arrival">
                             
     
                         </div>
     
                         <div id="content">
                             <i class="fa fa-users" aria-hidden="true"></i>
                             <select id="input-group" style="background-color: black;"name="Guest">
                                 <option value="">No.of guests</option>
                                 <option value="">1-5</option>
                                 <option value="">6-10</option>
                                 <option value="">11-20</option>
                             </select>
                         </div>
     
                     </div>
     
                     <div id="second-group">
     
                         <div id="content">
                             <i class="fa fa-user" aria-hidden="true"></i>
                             <input type="text" id="input-group" placeholder="Last name" name="Lname">
                         </div>
     
                         <div id="content">
                             <i class="fa fa-envelope-o" aria-hidden="true"></i>
                             <input type="email" id="input-group" placeholder="Email" name="email">
                         </div>
     
                         <div id="content">
                             <i class="fa fa-calendar" aria-hidden="true"></i>
                             <input type="text" id="input-group" placeholder="Departure Date" name="departure">
                         </div>
     
                         <div id="content">
                             <i class="fa fa-users" aria-hidden="true"></i>
                             <select id="input-group" style="background-color: black;" name="Roomtype">
                                 <option value="">Room Type</option>
                                 <option value="">Delux Room</option>
                                 <option value="">Single Bed</option>
                                 <option value="">Double Bed</option>
                             </select>
                         </div>
                 
                     </div>
     
                     <button type="submit" name="submit" value="Submit" id="submit-btn" style="vertical-align: middle; display: flex; align-items: center; text-align: center;">Book Now</button>
     
                 </div>
             </form>
         </div>
     </section>
     -->
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
         <!-- sidebar -->
         <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
         <script src="js/custom.js"></script>
      </body>
   </html>
   
