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
      <title>Coffees</title>
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
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
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
      $xml = simplexml_load_file('Rabe,Dela Cruz,Samarita_IT2C_DAYCAFE/coffees.xml');
      ?>
      <div class="header_section header_bg">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><?php echo'<img src="images/logo.jpg"alt="#"/>' ?></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php"><?php echo $xml ->content->home; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php"><?php echo $xml ->content->about; ?></a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="coffees.php"><?php echo $xml ->content->Coffees;?></a>
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link" href="blog.php"><?php echo $xml ->content->Blog; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php"><?php echo $xml ->content->Contact;?></a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <li><a href="#"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span><?php echo $xml->content->logIn; ?></a></li>
                           <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- coffee section start -->
      <div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <h1 class="coffee_taital"><?php echo $xml ->content->offer;?></h1>
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
                              <h3 class="types_text"><?php echo $xml ->content->types1;?></h3>
                              
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image2.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->combo;?></h3>

                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image3.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->types6;?></h3>
                             
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/Pistachio Honey Baklava Rolls.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->types4;?></h3>

                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/image5.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->types5;?></h3>
                              
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/Creamed Horns.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->varieties;?></h3>
                              
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/iced coffee.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->drinks;?></h3>
                              
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/expresso shot.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->coffee;?></h3>
                              
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/dulce de leche tart.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->desert;?></h3>
                              
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/Cinamon Bread with Chocolate Filling.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->varieties1;?></h3>
                              
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/coffee manggo.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->pastry;?></h3>
                              
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><?php echo'<img src="images/dalgona coffee.jpg"alt="#"/>' ?></div>
                              <h3 class="types_text"><?php echo $xml ->content->pastry1;?></h3>
                              
                              <div class="read_bt"><a href="#"><?php echo $xml ->content->read;?></a></div>
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
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">

                  
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10"><?php echo $xml ->content->number;?></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10"><?php echo $xml ->content->email;?></span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="form-group">
                     <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                     <?php<div class="subscribe_bt"><a href="#"><img src="images/teligram-icon.png"></a></div>?>
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
                  <p class="copyright_text"><?php echo $xml ->content->copyright;?></p>
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