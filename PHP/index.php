<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Day Cafe'</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif"
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="icon" href="images/icon2.jpg" type="image/x-icon">
   </head>
   <body>
      <?php
      $xml = simplexml_load_file('Rabe,Dela Cruz,Samarita_IT2C_DAYCAFE/index.xml');
      ?>
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><?php echo '<img src="images/logo.jpg" alt="#"/>'; ?></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php"><?php echo $xml->content->home; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php"><?php echo $xml->content->about; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="coffees.php"><?php echo $xml->content->Coffees;?></a>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" href="blog.php"><?php echo $xml->content->Blog; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php"><?php echo $xml->content->Contact;?></a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <li><a href="login.php"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span><?php echo $xml->content->LogIn; ?></a></li>
                           <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><?php echo '<img src="images/banner-img.png" alt="#"/>' ?></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital"><?php echo $xml->content->title1; ?></h1>
                                 <h5 class="tasty_text"><?php echo $xml->content->content1; ?></h5>
                                 <p class="banner_text"><?php echo $xml->content->content2; ?></p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="aboutUs.php"><?php echo $xml ->content->about_bt; ?></a></div>
                                    <div class="callnow_bt active"><a href="MakeReservation.php"><?php echo $xml ->content->reservation_bt; ?></a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><?php echo '<img src="images/banner-img.png" alt="#"/>' ?></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital"><?php echo $xml ->content->title1; ?></h1>
                                 <h5 class="tasty_text"><?php echo $xml ->content->content1; ?></h5>
                                 <p class="banner_text"><?php echo $xml ->content->content2; ?></p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="aboutUs.php"><?php echo $xml ->content->about_bt; ?></a></div>
                                    <div class="callnow_bt active"><a href="MakeReservation.php"><?php echo $xml ->content->reservation_bt; ?></a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><?php echo '<img src="images/banner-img.png" alt="#"/>' ?></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital"><?php echo $xml ->content->title1; ?></h1>
                                 <h5 class="tasty_text"><?php echo $xml ->content->content1; ?></h5>
                                 <p class="banner_text"><?php echo $xml ->content->content2; ?> </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="aboutUs.php"><?php echo $xml ->content->about_bt; ?></a></div>
                                    <div class="callnow_bt active"><a href="MakeReservation.php"><?php echo $xml ->content->reservation_bt; ?></a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- coffee section start -->
      <div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <h1 class="coffee_taital"><?php echo $xml ->content->offer; ?></h1>
               <div class="bulit_icon"><?php echo'<img src="images/bulit-icon.png"alt="#"/>' ?></div>
            </div>
         </div>
         <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image1.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml->content->types1; ?></h3>
                              <p class="looking_text"><?php echo $xml->content->types_text; ?></p>
                              <div class="read_bt"><a href="TypesOfCoffee.php"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/coffee bean.jpg" alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml->content->types2; ?></h3>
                              <p class="looking_text"><?php echo $xml->content->types_text; ?></p>
                              <div class="read_bt"><a href="BeanVarieties.php"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/coffee and pastries.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml->content->types3; ?></h3>
                              <p class="looking_text"><?php echo $xml->content->types_text; ?></p>
                              <div class="read_bt"><a href="CoffeeAndPastry.php"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image4.jpg" alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml->content->types4; ?></h3>
                              <p class="looking_text"><?php echo $xml->content->types_text; ?></p>
                              <div class="read_bt"><a href="CoffeeToGo.php"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image5.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->types1; ?></h3>
                              <p class="looking_text"><?php echo $xml ->content->types_text; ?></p>
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image6.jpg" alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->types2; ?></h3>
                              <p class="looking_text"><?php echo $xml ->content->types_text; ?></p>
                              <div class="read_bt"><a href="#"><a href="#"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image7.jpg" alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->types3; ?></h3>
                              <p class="looking_text"><?php echo $xml ->content->types_text; ?></p>
                              <div class="read_bt"><a href="#"><a href="#"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image8.jpg" alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->types2; ?></h3>
                              <p class="looking_text"><?php echo $xml ->content->types_text; ?></p>
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image9.jpg" alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->types1; ?></h3>
                              <p class="looking_text"><?php echo $xml ->content->types_text; ?></p>
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image10.jpg" alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->types2; ?></h3>
                              <p class="looking_text"><?php echo $xml ->content->types_text; ?></p>
                              <div class="read_bt"><a href="aboutUs.php"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image11.jpg" alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->types3; ?></h3>
                              <p class="looking_text"><?php echo $xml ->content->types_text; ?></p>
                              <div class="read_bt"><a href="aboutUs.php"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image12.jpg" alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->types4; ?></h3>
                              <p class="looking_text"><?php echo $xml ->content->types_text; ?></p>
                              <div class="read_bt"><a href="aboutUs.php"><?php echo $xml ->content->read_bt; ?></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- coffee section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital"><?php echo $xml ->content->about2; ?></h1>
                  <div class="bulit_icon"><?php echo'<img src="images/bulit-icon.png" alt="#"/>' ?></div>
               </div>
            </div>
            <div class="about_section_2 layout_padding">
               <div class="image_iman"><?php echo'<img src="images/image13.jpg" class="about_img" alt="#"/>' ?></div>
               <div class="about_taital_box">
                 
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital"><?php echo $xml ->content->about3; ?></h1>
                  <div class="bulit_icon"><?php echo'<img src="images/bulit-icon.png" alt="#"/>' ?></div>
               </div>
            </div>
            <div class="client_section_2">
               <div class="client_taital_main">
                  <div class="client_left">
                     <div class="client_img"><?php echo'<img src="images/customer-img1.jpg" alt="#"/>' ?></div>
                  </div>
                  <div class="client_right">
                     <h3 class="moark_text"><?php echo $xml ->content->client; ?></h3>
                     <p class="client_text"><?php echo $xml ->content->info; ?></p>
                  </div>
               </div>
               <div class="client_taital_main">
                  <div class="client_left">
                     <div class="client_img"><?php echo'<img src="images/customer-img2.jpg" alt="#"/>' ?></div>
                  </div>
                  <div class="client_right">
                     <h3 class="moark_text"><?php echo $xml ->content->client1; ?></h3>
                     <p class="client_text">"><?php echo $xml ->content->info1; ?></p>
                  </div>
               </div>
               <div class="client_taital_main">
                  <div class="client_left">
                     <div class="client_img"><?php echo'<img src="images/customer-img3.jpg" alt="#"/>' ?></div>
                  </div>
                  <div class="client_right">
                     <h3 class="moark_text"><?php echo $xml ->content->client2; ?></h3>
                     <p class="client_text"><?php echo $xml ->content->info2; ?> </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital"><?php echo $xml ->content->blog; ?></h1>
                  <div class="bulit_icon"><?php echo'<img src="images/bulit-icon.png" alt="#"/>' ?></div>
               </div>
            </div>
            <div class="blog_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="blog_box">
                        <div class="blog_img"><?php echo'<img src="images/barista 1.jpg" alt="#"/>' ?></div>
                        <h4 class="date_text"><?php echo $xml ->content->date; ?></h4>
                        <h4 class="prep_text"><?php echo $xml ->content->barista1; ?></h4>
                        <p class="lorem_text"><?php echo $xml ->content->text1; ?></p>
                     </div>
                     <div class="read_bt"><a href="preftechniquescoffee.php"><?php echo $xml ->content->read_bt; ?></a></div>
                  </div>
                  <div class="col-md-6">
                     <div class="blog_box">
                        <div class="blog_img"><?php echo'<img src="images/barista 2.jpg" alt="#"/>' ?></div>
                        <h4 class="date_text"><?php echo $xml ->content->date; ?></h4>
                        <h4 class="prep_text"><?php echo $xml ->content->barista2; ?></h4>
                        <p class="lorem_text"><?php echo $xml ->content->text2; ?></p>
                     </div>
                     <div class="read_bt"><a href="preftechniquescoffee1.php"><?php echo $xml ->content->read_bt; ?></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital"><?php echo $xml ->content->touch; ?></h1>
                  <div class="bulit_icon"><?php echo'<img src="images/bulit-icon.png" alt="#"/>' ?></div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                        <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                        <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        <div class="send_bt"><a href="#"><?php echo $xml ->content->send; ?></a></div>
                     </div>
                  </div>
                  
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">

                  
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01 1234567890</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">demo@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="form-group">
                     <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                     <div class="subscribe_bt"><a href="#"><img src="images/teligram-icon.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <p class="copyright_text"><?php echo $xml ->content->copy; ?></p>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="footer_social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>