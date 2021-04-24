
<div class="top-overlay fade-out" id="menu">
                <nav class="top-overlay-content" id="nav">
                    <span class="top-overlay-close" id="close-btn"> &times; </span>
                    <div class="container" id="container">
                        <div class="first-nav text-center">
                            <ul class="first-nav text-center">
                           <?php 

         if(!isset($_SESSION['email']))

            {
          
            ?>
        
         <li><a href="index.php">Home</a></li>
                            <li><a href="jhome.php">Jobs</a></li>
                            <li><a href="about.php">Colleges</a></li>
                            <li><a href="gallery.php" class="dropdown">Events</a></li>
                             <li class="dropdown">
                              <button class="dropbtn">Dropdown <i class="fas fa-angle-down"></i></button>
                              <div class="dropdown-content">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Sign In</a>
                               <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Sign Up</a>
                              </div>
                            </li>
                            
                            <li><a href="pdf.php">Notes</a></li>     
                            
                         
            <?php
            }
              else if (isset($_SESSION['email'])) 
              {
                       ?>                              
                <li><a href="index.php">Home</a></li>
                <li><a href="jhome.php">Jobs</a></li>
                <li><a href="about.php">Colleges</a></li>
                <li><a href="gallery.php" class="dropdown">Events</a></li>
                   <li class="dropdown">
                  <button class="dropbtn">Dropdown</button>
                  <div class="dropdown-content">
                    <a href="profile.php?msg=Welcome Sir">Profile </a>
                   <a href="usignout.php">Sign Out</a>
                  </div>
                </li>
              
               <li><a href="pdf.php">Notes</a></li>     
                            <?php
                 }
                            ?>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
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
                        <form action="ucheck.php" method="post">
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
                                <label>Your name*</label>

                                <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="Enter you Full name" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="email" class="form-control" id="validationDefault02" name="email" placeholder="Enter you email" required="required">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password*</label>
                                <input type="password" name="password" class="form-control" id="password1" placeholder="Enter your Password" required="required">
                            </div>
                            <div class="form-group">
                                <label>Mobile*
                                </label>
                                <input type="integer" class="form-control" id="password2" maxlength="10" name="mobile" placeholder="Enter your mobile number" required="required">
                            </div>
                           <!--   <div class="form-group">
                                <label>GST Registration Number</label>
                                <input type="text" class="form-control" id="password2"  name="gst" placeholder="" required="required">
                            </div> -->

                            <button type="submit" class="btn btn-primary submit mb-4" name="login">Register</button>
                           
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->