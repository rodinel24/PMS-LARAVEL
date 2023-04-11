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
      <title>Dr. Ringia Hotel Website</title>
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
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
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
                           <a href="{{ route('home') }}"><img src="images/logoHotel.png" alt="#" /></a>
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
                                 <a class="nav-link" href="{{ route('home') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('about') }}">About</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ route('ourRoom') }}">Facilities</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="{{ url('login') }}">PMS</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
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
                     <h2>Room</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
     <!-- room -->
     <div  class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                 
               </div>
            </div>
            <div class="row">
                              <!-- more photos with transition -->
                              <div class="col-md-4">
                                 <div class="blog_box">
                                    <div class="blog_img">
                                    <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
                           <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                           </ol>
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <img class="first-slide" src="images/singleroom1.jpg" alt="First slide">
                                 <div class="container">
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <img class="second-slide" src="images/singleroom2.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                 <img class="third-slide" src="images/singleroom1.jpg" alt="Third slide">
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
                           <!-- end of photos transition -->
                     </div>
                     <div class="blog_room">
                        <h3>Single Bedroom</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                         <!-- modal -->
                              <!-- Button trigger modal -->
                              <button class="seeMore" id="open-modal1">See more photos</button>

                              <div id="modal1" class="modal">
                              <div class="modal-content">
                                 <button class="close" onclick="closeModals()">&times;</button>
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 
                              </div>
                              </div>
                     </div>
                  </div>
               </div>
               <!-- more photos with transition -->
               <div class="col-md-4">
                                 <div class="blog_box">
                                    <div class="blog_img">
                                    <div id="myCarousel1" class="carousel slide banner" data-ride="carousel">
                           <ol class="carousel-indicators">
                              <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel1" data-slide-to="1"></li>
                              <li data-target="#myCarousel1" data-slide-to="2"></li>
                           </ol>
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <img class="first-slide" src="images/doubleroom1.jpg" alt="First slide">
                                 <div class="container">
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <img class="second-slide" src="images/doubleroom2.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                 <img class="third-slide" src="images/doubleroom3.jpg" alt="Third slide">
                              </div>
                           </div>
                           <a class="carousel-control-prev" href="#myCarousel1" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#myCarousel1" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                           </a>
                        </div>
                           <!-- end of photos transition -->
                     </div>
                     <div class="blog_room">
                        <h3>Double Bedroom</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>

                         <!-- modal -->
                              <!-- Button trigger modal -->
                              <button class="seeMore" id="open-modal2">See more photos</button>

                              <div id="modal2" class="modal">
                              <div class="modal-content">
                              <button class="close" onclick="closeModals()">&times;</button>

                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 
                              </div>
                              </div>
                     </div>
                  </div>
               </div>
               <!-- more photos with transition -->
               <div class="col-md-4">
                                 <div class="blog_box">
                                    <div class="blog_img">
                                    <div id="myCarousel2" class="carousel slide banner" data-ride="carousel">
                           <ol class="carousel-indicators">
                              <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel2" data-slide-to="1"></li>
                              <li data-target="#myCarousel2" data-slide-to="2"></li>
                           </ol>
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <img class="first-slide" src="images/familyroom1.jpg" alt="First slide">
                                 <div class="container">
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <img class="second-slide" src="images/familyroom2.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                 <img class="third-slide" src="images/familyroom3.jpg" alt="Third slide">
                              </div>
                           </div>
                           <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                           </a>
                        </div>
                           <!-- end of photos transition -->
                     </div>
                     <div class="blog_room">
                        <h3>Family Bedroom</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                              <!-- modal -->
                              <!-- Button trigger modal -->
                              <button class="seeMore" id="open-modal3">See more photos</button>

                              <div id="modal3" class="modal">
                              <div class="modal-content">
                              <button  class="close" onclick="closeModals()">&times;</button>

                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 
                              </div>
                              </div>


                  </div>
                  </div>
               </div>
             
            </div>
         </div>
      </div>
      
      <!-- start function hall-->
      <div  class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Function Hall</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            <div class="row" id="functionHall">
                              <!-- more photos with transition -->
                              <div class="col-md-12">
                                 <div class="blog_box" id="boxFunction">
                                    <div class="blog_img" >
                                    <div id="myCarousel3" class="carousel slide banner" data-ride="carousel">
                           <ol class="carousel-indicators">
                              <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel3" data-slide-to="1"></li>
                              <li data-target="#myCarousel3" data-slide-to="2"></li>
                           </ol>
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <img class="first-slide" src="images/singleroom1.jpg" alt="First slide">
                                 <div class="container">
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <img class="second-slide" src="images/singleroom2.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                 <img class="third-slide" src="images/singleroom1.jpg" alt="Third slide">
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
                           <!-- end of photos transition -->
                     </div>
                     <div class="blog_room" id="text">
                        <h3>Single Bedroom</h3>
                        <span>The standard chunk </span>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you are   </p>
                         <!-- modal -->
                              <!-- Button trigger modal -->
                              <button class="seeMore" id="open-modal4">See more photos</button>

                              <div id="modal4" class="modal">
                              <div class="modal-content">
                                 <button class="close" onclick="closeModals()">&times;</button>
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 <img src="images/hotelmsat.jpg" alt="Your image description here" />
                                 
                              </div>
                              </div>
                     </div>
                  </div>
               </div>
          
            
                   
                  </div>
               </div>
             
            </div>
         </div>
      </div>

      <!-- end function hall  -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row" id="foot">
                  <div class=" col-md-5" id="contact">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Maigo, Lanao del Norte</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i>Contact Number</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#">Businesshotel@gmail.com</a></li>
                     </ul>
                  </div>
                 
                  <div class="col-md-5" >
                     
                     <ul class="social_icon">
                        <li><a href="https://www.facebook.com/profile.php?id=100085898087309" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li> <a href="https://twitter.com/Dr_Ringia_Hotel" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        
                        <p>
                        © 2022-2023 All Rights Reserved. </a>
                       

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script>
         
// Get the modal
var modal1 = document.getElementById("modal1");
var modal2 = document.getElementById("modal2");
var modal3 = document.getElementById("modal3");
var modal4 = document.getElementById("modal4");

// Get the button that opens the modal
var btn1 = document.getElementById("open-modal1");
var btn2 = document.getElementById("open-modal2");
var btn3 = document.getElementById("open-modal3");
var btn4 = document.getElementById("open-modal4");

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}
btn2.onclick = function() {
  modal2.style.display = "block";
}
btn3.onclick = function() {
  modal3.style.display = "block";
}
btn4.onclick = function() {
  modal4.style.display = "block";
}

function closeModals() {
  var modal1 = document.getElementById("modal1");
  var modal2 = document.getElementById("modal2");
  var modal3 = document.getElementById("modal3");
  var modal4 = document.getElementById("modal4");

  modal1.style.display = "none";
  modal2.style.display = "none";
  modal3.style.display = "none";
  modal4.style.display = "none";
}

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];


// modal1.style.display = "none";
// modal2.style.display = "none";
// modal3.style.display = "none";

// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal1.style.display = "none";
  
// }
// span.onclick = function() {
//   modal2.style.display = "none";
// }
// span.onclick = function() {
//   modal3.style.display = "none";
// }
// When the user clicks anywhere outside of the modal, close it


function closeModalOnClickOutside(event, modal) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}



// Attach an event listener to the window object to listen for clicks
window.addEventListener("click", function(event) {
  closeModalOnClickOutside(event, modal1);
  closeModalOnClickOutside(event, modal2);
  closeModalOnClickOutside(event, modal3);
  closeModalOnClickOutside(event, modal4);
});


      </script>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>