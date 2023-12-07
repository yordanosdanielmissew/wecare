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
      <title>Contact</title>
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
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <!-- header section top start -->
      
      <!-- header section top end -->
      <!-- header section middle start -->
      <div class="header_section_middle">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="logo"><a href="index.html"><img src="images/healthlogo.png"></a></div>
               </div>
               <div class="col-md-7">
                  <div class="location_main">
                     <p class="location_top"><a href="#"><span class="padding_15"><img src="images/call-removebg-preview.png" class="call-image"></span>(+251) 935852732</a></p>
                     <p class="location_top"><a href="#"><span class="padding_15"><img src="images/emaile.png" class="call-image"></span>wecare@gmail.com</a></p>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <!-- header section middle end -->
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <p class="wecare">We Care</p>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="review.php">Review</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blogs</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
     
         <div class="container1">
            
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital contact_heading">Get In Touch</h1>
               </div>
            </div>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     
                     <div class="mail_section map_form_container">
                        <form name="myForm" onsubmit="return validateForm()" action="contactus.php" method="POST">
                           <input type="text" class="mail_text" placeholder="Full Name" name="full_name" required><br>
                           <input type="email" class="mail_text" name="email" placeholder="Email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required><br>
                           <input type="number" class="mail_text" placeholder="Phone Number" name="phone_number" maxlength="10" required> <br>
                           <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message"></textarea><br>
                           <div class="send_bt active">
                              <button type="submit" class="cont">SEND</button>
                           </div>
                           
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
         function validateForm() {
  let x = document.getElementsByName["myForm"]["full_name"]["email"]["phone_number"]["message"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  else{
   alert("successful");
  }
}
      </script>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <h3 class="footer_text">About</h3>
                  <p class="lorem_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use </p>
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
                  <div class="footer_menu">
                  <h3 class="footer_text">Use ful Link</h3><br>
                 
                     <ul class="footer_text_ul">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="review.php">Review</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contcat Us</a></li>
                     </ul>
                  </div>
                 
                  <div class="footer_menu">
                     <h3 class="footer_text1">Our Service</h3><br>
                    
                        <ul class="footer_text1_ul">
                           <li><a href=" ">Primary Care</a></li>
                           <li><a href=" ">Dental Care</a></li>
                           <li><a href=" ">Addiction Care</a></li>
                           <li><a href=" ">Community Health</a></li>
                           <li><a href=" ">Mental Disorder</a></li>
                           <li><a href=" ">Children Health</a></li>
                        </ul>
                     </div>
                     <div class="footer_menu">
                        <h3 class="footer_text2">Address</h3><br>
                       <p class="footer_address">Phone Number: +251935852732</p>
                       <p class="footer_address">E-mail: wecare@gmail.com</p>
                       <p class="footer_address">Address: Megenagna,<br> metebaber building,2ndfloor</p>
                     </div>
               </div>
            </div>
         </div>
      </div> 
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 All Rights Reserved</p>
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
      <!-- javascript --> 
   </body>
</html>