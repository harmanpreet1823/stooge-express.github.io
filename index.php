<?php session_start(); ?>
<?php 
        
        if (isset($_REQUEST['msg']))
        {
            $msg= $_REQUEST['msg'];
            echo "<script>alert('$msg');</script>";
        }
        ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
   
    <title>Stoogle Express</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Collegian a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
      
        
        
      
    </script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/examples.css" rel="stylesheet" type="text/css">
    <link href="css/slider-pro.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link href="css/nav.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<style>
.logo1{
    position: absolute;
    background: url(images/final.png);
    background-size: cover;
    top: 5%;
    left:17%;
    width:70%;
    height:70%;
     padding: 8px 12px;
     animation: bigbox 2s linear  1 ;

}
@keyframes bigbox{
      from{
         left:-300px;
       
       }

       to{
     
         left:250px;
       }
 }
/*.card-body:hover{
    box-shadow: 30px 30px 30px 0px rgba(0,0,0,0.5);

}
 */

 

</style>

</head>

<body>
    <div id="example1" class="slider-pro">

        <div class="sp-slides">

            <div class="sp-slide">

                <img class="sp-image" src="images/blank.gif" data-src="images/banner5.jpg" alt=" " data-retina="images/banner5.jpg" />
                 
                
                </h3>
  <div class="logo1"></div>

                      <!-- <h3 class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="10%" data-show-transition="left" data-hide-transition="left">
                
                </h3> -->

                

            </div>

            <div class="sp-slide">
                <img class="sp-image" src="images/blank.gif" data-src="images/slide2.png" alt=" " data-retina="images/slide2.png" />

               
                
                <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="10%" data-show-transition="left" data-hide-transition="left">
                 DREAM Bigger,DO Bigger
                </h3>


            </div>
            <div class="sp-slide">
                <img class="sp-image" src="images/blank.gif" data-src="images/slide.jpg" alt=" " data-retina="images/slide.jpg" />

                <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="10%" data-show-transition="left" data-hide-transition="left">
                  Don't Wait the OPPORTUNITY , create it 
                </h3>
            </div>
        </div>

        <div class="sp-thumbnails">
            <div class="sp-thumbnail">
                <div class="sp-thumbnail-title">COLLEGES</div>
                <div class="sp-thumbnail-description">The ladder of achieving success</div>
            </div>

            <div class="sp-thumbnail">
                <div class="sp-thumbnail-title">JOBS</div>
                <div class="sp-thumbnail-description">DREAM Bigger,DO Bigger</div>
            </div>

            <div class="sp-thumbnail">
                <div class="sp-thumbnail-title">NOTES</div>
                <div class="sp-thumbnail-description">Everyone has two eyes,but no one has same view</div>
            </div>

        </div>
        <!--/nav-->
        <div class="top_nav">
            <h1>
           <a class='logo' href='index.php'>Stoogle Express</a>
                <?php  if(isset($_SESSION['email']))

            {
          
         

                                            $con=mysqli_connect("localhost","root","","stoogle");
                                            $ins="select * from employer where email='$_SESSION[email]'";
                                            $run=mysqli_query($con,$ins);
                                            while($row=mysqli_fetch_array($run))
                                            {
                                           
                         
           

             echo"<a class='logo' href='profile.php'>&nbsp;&nbsp;&nbsp; <h4><h6>Welcomes</h6>".$row['name']."</h4></a>";
                                     }
                                            
                          }                  
                                            
                                    ?> 
            </h1>
             <?php
           if(!isset($_SESSION['email']))
             {
           ?>
        
                     <div class="top-btns">
                <div class="sign-btn">
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Sign Up</a>
                </div>
            </div>
               <?php
               }          
          
                   ?>

            <div class="container-btn" id="btn">
                <div class="text">Menu</div>
                <div id="bars">
                    <div class="bar first"></div>
                    <div class="bar second"></div>
                    <div class="bar third"></div>
                </div>
            </div>


            <!-- top-overlay -->
          <?php
    include("menu.php");
 ?>
            <!--//nav-->
        </div>
    </div>
    <!---->
    <!--banner-bottom-w3layouts-->
    <section class="banner-bottom-w3layouts py-md-5 py-4">
        <div class="container">
            <div class="inner-sec-wthree-w3ls py-md-5 py-4">
                <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                    
            <span>Visit</span>Welcome Our Site</h3>
                <div class="row mt-5">
                    <div class="col-lg-6 about-img" >
                <div class="pic">
                                <img src="images/log2.png" alt="" class="img-fluid">
                           </div>
                    </div>
                    <div class="col-md-6 aboutright">
                        <h3>'STOOGLE EXPRESS' is a combined platform
                        for Job provider, Job seeker and a normal student.</h3>
                        <br>
                        <p>Student who is willing to get admission in new college and want to get basic information about it . The visitor also get notes of various subjects in order to make their notes easier and faster.</p>
                              
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="offer-service-w3ls py-md-5 py-4">
        <div class="container">
            <div class="inner-sec-wthree-w3ls py-md-5 py-4">
                <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                    <span>We Offer</span>What are you looking for? </h3>
                <div class="row">
                    <div class="col-lg-6 service-in text-center">
                    <div class="card">
                        <div class="card-body">
                             <a href="jhome.php"> <i><img src="images/job.svg" height="200px"  /></i>
                                <br></br>
                            <h5 class="card-title">Jobs</h5>
                        </a>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6 service-in text-center">
                        <div class="card">
                        <div class="card-body">
                            <a href="about.php"> <i><img src="images/col.svg" height="200px" /></i>
<br></br>
                            <h5 class="card-title">Colleges</h5></a>
                        </div>
                    </div>
                       
                    
                </div>
            </div>
        </div>
    </section>

 <section class="stats_test container-fluid">
      <div class="inner-sec-wthree-w3ls py-lg-4 py-4">
     <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                    <span>Visit</span>Our Services</h3>

        <div class="row inner-sec-wthree-w3ls">


            <div class="col-sm-4 col-6 py-5 stats_info counter_grid">

                <br><br>
                <p class="counter">40</p>
                <h4>Colleges</h4>
            </div>
            <div class="col-sm-4 col-6 py-5 stats_info counter_grid1">
                <br><br>
                <p class="counter">150</p>
                <h4>Jobs</h4>
            </div>
            <div class="col-sm-4 col-6 py-5 stats_info counter_grid2">
                <br><br>
                <p class="counter">10</p>
                <h4>Subject Notes</h4>
            </div>
        </div>
    </div>
    </section>

   <section class="banner-bottom-w3layouts py-lg-5 py-lg-4 py-4">
        <div class="container">
            <div class="inner-sec-wthree-w3ls py-lg-4 py-4">
                <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                    <span>Visit</span>Explore Courses</h3>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/btech.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">B.Tech
                                    </h5>
                                    <p class="card-text">
                                        Bachelor's of Technology</p>
                                        <ul class="property-box">
                                            <li class="field-item text-left">
                                                
                                                Duration:4 years</li>
                                                
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/g1.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">BCA
                                    </h5>
                                    <p class="card-text">
                                       Bachelor's of Computer Applications</p>
                                        <ul class="property-box">
                                            <li class="field-item text-left">
                                                
                                                Duration: 3 years</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/bba.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">BBA
                                    </h5>
                                    <p class="card-text">
                                        Bachelor of Business Administration</p>
                                        <ul class="property-box">
                                            <li class="field-item text-left">
                                                
                                            Duration: 3 years</li>
                                               
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/g4.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">B.Voc.
                                    </h5>
                                    <p class="card-text">
                                        Bachelor's of Vocational Education</p>
                                        <ul class="property-box">
                                            <li class="field-item text-left">
                                                
                                                Duration: 3 years</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/doc.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">MBBS
                                    </h5>
                                    <p class="card-text">
                                    Bachelor of Medicine and Bachelor of Surgery</p>
                                        <ul class="property-box">
                                            <li class="field-item text-left">
                                                
                                                Duration: 5.5 Years  </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/g5.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">PGDCA
                                    </h5>
                                    <p class="card-text">
                                        Post Graduate Diploma in Computer Applications</p>
                                        <ul class="property-box">
                                            <li class="field-item text-left">
                                                
                                                Duration: 1 Year </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/fashi.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">B.Sc.
                                    </h5>
                                    <p class="card-text">
                                        In Fashion Designing(Degree Course)</p>
                                        <ul class="property-box">
                                            <li class="field-item text-left">
                                                
                                                Duration: 3 years</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/nurse.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">B.Sc.and M.Sc.
                                    </h5>
                                    <p class="card-text">
                                        In Nursing ( Bachelor's and Master Courses) </p>
                                    <ul class="property-box">
                                        <li class="field-item text-left">
                                            
                                            Duration: 3 years</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

   


    <!-- footer -->
<section class="footer">
    <div class="footer-top-w3layouts py-lg-3">
        <div class="container">
            <div class="row footer-grids">
                <div class="col-lg-6 col-md-7 footer-grid text-left">
                    <div class="footer-logo">
                        <h3 class="mb-3"><a class="logo" href="index.html">Stoogle Express</a></h3>
                        <p>'STOOGLE EXPRESS' is a combined platform
                        for Job provider, Job seeker and a normal student.Student who is willing to get admission in new college and want to get basic information about it . The visitor also get notes of various subjects in order to make their notes easier and faster.</p>
                   
                    
                
                    </div>
                </div>
                <div class="col-lg-2 col-md-7 col-sm-5 mt-lg-0 mt-sm-5 mt-4 footer-grid links text-left">
                    <h3 class="mb-4"> links </h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="404.html">Blog</a>
                        </li>
                        <li>
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 footer-grid links text-left">
                    <h3 class="mb-4">contact Us </h3>
                    <ul>
                    <li><strong>Address</strong> : Near Landran, Mohali, Punjab</li>
                        <li><strong>Mobile</strong> : +91 98786 467484</li>
                        <li><strong>Phone</strong> :  1800 274 0444</li>
                        <li><strong>Mail</strong> : <a href="mailto:info@example.com">www.cgc.edu.in</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //footer -->

<!-- copyright -->
<div class="copy_right_w3ls py-4 text-center">
    <p> © 2020 Copyright: Chandigarh Group Of Colleges, Landran Harmanpreet Singh(1914577)</p>
    
</div>
<!-- //copyright -->


    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                         <?php
                if(isset($_REQUEST['msg'])){
                  echo "<div class='alert alert-danger'>".$_REQUEST['msg']."</div>";
                }
               ?>
                        <form action="ucheck.php" method="get">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                          
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-center pb-4">
                               <!-- <a href="" data-toggle="modal2" data-target="#sigunp"> Don't have an account?</a>
                            --></p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="signup">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Register Now</h5>
                        <form action="usubmit.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Your name</label>

                                <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="Enter you Full name" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="validationDefault02" name="email" placeholder="" required="">
                            </div>

                          

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" name="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Mobile
                                </label>
                                <input type="integer" class="form-control" id="password2" maxlength="10" name="mobile" placeholder="" required="">
                            </div>
                             <div class="form-group">
                                <label>GST Registration Number</label>
                                <input type="text" class="form-control" id="password2"  name="gst" placeholder="" required="required">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4" name="login">Register</button>
                           
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->

    <!--//model-form-->

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- menu -->
    <script src="js/index.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!-- //menu -->
    <!--slider-->
    <script src="js/jquery.sliderPro.min.js"></script>
    <script>
        $(document).ready(function ($) {
            $('#example1').sliderPro({
                width: 1980,
                height: 800,
                arrows: true,
                buttons: false,
                waitForLayers: true,
                thumbnailWidth: 270,
                thumbnailHeight: 100,
                thumbnailPointer: true,
                autoplay: false,
                autoScaleLayers: false,
                breakpoints: {
                    500: {
                        thumbnailWidth: 120,
                        thumbnailHeight: 50
                    }
                }
            });
        });
    </script>
    <!--//slider-->
    <!-- stats -->
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.countup.js"></script>
        <script>
            $('.counter').countUp();
        </script>
    <!-- //stats -->

    <!-- carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    900: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            /*
                                    var defaults = {
                                          containerID: 'toTop', // fading element id
                                        containerHoverID: 'toTopHover', // fading element hover id
                                        scrollSpeed: 1200,
                                        easingType: 'linear' 
                                     };
                                    */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
</body>

</html>