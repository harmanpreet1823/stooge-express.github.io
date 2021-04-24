<?php
    include("header.php");
   $category=$_REQUEST['category'];  
                       $c=$_REQUEST['c'];  

 ?>

   <section class="banner-bottom-w3layouts py-lg-5 py-lg-4 py-4">
        <div class="container">
            <div class="inner-sec-wthree-w3ls py-lg-4 py-4">
                <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                    <span>Explore</span><?php echo $c;?></h3>
               <div class="owl-carousel owl-theme">
                <?php                      
          
                       $category=$_REQUEST['category'];  
                       $c=$_REQUEST['c'];  
                              // $con=mysqli_connect("localhost","root","","stoogle");
          // $sel="select * from  job limit 1,90 ";
          // $run=mysqli_query($con,$sel);
          // if($row=mysqli_fetch_array($run))

          $con=mysqli_connect("localhost","root","","stoogle");
          $sel="select * from  jobs where category = '$category'";
          $run=mysqli_query($con,$sel);
          if($row=mysqli_fetch_array($run))
          {
             $id=$row['id'];
            $name=$row['name'];
            $sal=$row['sal'];
            $address=$row['address'];
            $exp=$row['exp'];
            $category= $row['category'];
            
            $qual= $row['qual'];
            $jtype= $row['jtype'];
            $date= $row['date'];
            $cname= $row['cname'];
         
            }
            ?>
                     <?php
                           while($row=mysqli_fetch_array($run))  
          {
            ?>
           
              
                    <div class="item" >
                        <div class="cource-box-info text-center rounded">
                  
                            <div class="card">
                                <div class="card-body">
                      <br>
                                <h5><?php echo "$row[cname]"; ?></h5>
                                    <h5 class="card-title mt-3">
                                     <?php echo "$row[name]"; ?>
                                    </h5>
                              
                                    <b><p style="color:black;">Salary:<?php echo "$row[sal]";?></p></b>
                                  	<p><?php echo "$row[address]"; ?></p>
                                      <p><b>Exp:</b><?php echo "$row[exp]"; ?></p>
                                       <p><?php echo "$row[category]"; ?></p>
                                       <p><?php echo "$row[qual]"; ?></p>
                                       <p><?php echo "$row[jtype]"; ?></p>
                                       <p>Posted on:<?php echo "$row[date]"; ?></p>
                               <p class="card-text"></p>
                                      
                                        <ul class="property-box">
                                           <a href="#" data-toggle="modal" data-target="#data">
                                            <strong><li class="field-item text-center text-danger" >APPLY NOW
                                            </li>  </strong> 
                                            </a> 
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            </div>
                    </div>
                      <?php 
            }?>   
   

                </div>

            </div>

        </div>

    </section>



    <div class="modal fade" id="data" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="signup">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Apply Now</h5>
                        <form action="ssubmit.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Your name</label>

                                <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="Enter you Full name" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="validationDefault02" name="email" placeholder="Enter your email" required="">
                            </div>

                           
                            <div class="form-group">
                                <label>Mobile
                                </label>
                                <input type="integer" class="form-control" id="password2" maxlength="10" name="mobile" placeholder="Enter your mobile number" required="">
                            </div>
                             <div class="form-group">
                                <label>Gender</label>
                                <input type="text" class="form-control" id="password2"  name="gender" placeholder="Enter your gender" required="required">
                            </div>
                              <div class="form-group">
                                <label>Upload Resume/CV</label>
                                <input type="file" name="resume" class="form-control"/>
                            </div>
                                <div class="form-group">
                                <label>Qualification</label>
                                <select name="qual" class="form-control">
                    <option selected="selected" disabled="disabled">Select Your Qualfication</option>
                    <option name>Matriculation</option>
                    <option>12th</option>
                    <option>Diploma</option>
                    <option>Degree</option>
                    </select>
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4" name="login">Register</button>
                           
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>



    
  <?php
    include("footer.php");
 ?>