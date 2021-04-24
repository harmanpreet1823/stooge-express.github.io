<style>
.marqq{
  width: 24%;
  height: 800px;
  /*background: #666;*/
  float:left;
  /*overflow: hidden;*/
  display:block;
  position: relative;
}
.marq-cont{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 810px;
  margin-left: 7px;
  
  overflow: hidden;
}
.marquee{

  position:relative;
  width:90%;
  animation:scroll 70s linear infinite;
  animation-delay: 0;
  padding-left:3px;

}

.marquee:hover {
    animation-play-state: paused
}

.img1 {
  
  width:100%;
  height:100px;
border:1px solid white;
border-radius:  2%;

  
}

h3{
  text-align: center;
  color: #fff;
}
/* Make it move */
@keyframes scroll{
  0% {bottom:800px;}
  100% {bottom:-800px;}
}

.card-body:hover { 

  border-radius: 15%;
 
  box-shadow: 30px 30px 30px 10px rgba(0,0,0,0.5);
}


.card-body:hover img{
  filter:drop-shadow(9px);
}
</style>
<?php
    include("header.php");
 ?>

          <div class="row choose-main"> 
          <?php                      
                      
          $con=mysqli_connect("localhost","root","","stoogle");
          $sel="select * from  jobs Limit 1,180";
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
            <div class="marqq">
              <div class="marq-cont" style="background: black">


        <svg height="810px" width="100%">
        <div class="points" style="opacity:1;z-index: 1; fill: #333" />
</div>
        </svg>
    
        <div class="marq-cont">
          <div class="marquee">
            <?php

          while($row=mysqli_fetch_array($run))  
          {
              ?>
        <!-- 
           <div class="img1 text-dark" ><?php echo $row['name']; ?><br> 
                 <b>  <?php echo $row['cname']; ?></b> <br>
             <?php echo $row['address']; ?><br>
                 <?php echo $row['sal']; ?> <br>
                 Posted on:<?php echo $row['date']; ?> 
             </div> -->
             <div class="img1 text-dark"  style="height:150px ; text-decoration: none;text-align: center;"><?php echo $row['name']; ?><br> 
                  <b><?php echo $row['cname']; ?></b> <br>
             <?php echo $row['address']; ?><br>
                 <?php echo $row['sal']; ?> <br>
                 Posted on:<?php echo $row['date']; ?> 
             <a href="#" data-toggle="modal" data-target="#data">
                 <h5 class="text-danger">Apply Now</h5>
           </a>
             </div>
   <?php 
            }?>
          </div>
        </div>
      </div>
    </div>

        <!-- <div class="marquee col-lg-3 bg-dark text-center text-danger">
            
            <div class="marq-cont" style="height: 800px;">
              <div class="marquee mt-5" style="animation: scroll 30s linear infinite; ">
                <h2 style="color: #fff">Recent Jobs</h2> -->


                 
         
            
        <section class="offer-service-w3ls col-lg-9" >
        <div class="container ">
            <div class="inner-sec-wthree-w3ls py-md-5 py-4">
                <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                    <span>We Offer</span>What are you looking for? </h3>
                  <div class="row">
                    <div class="col-lg-4 service-in text-center mt-5">
          <div class="card">
            <div class="card-body">
              
              <a href="jview.php?category=CSE&c=Computer Engineering Jobs"><i ><img src="images/elect.svg" height="100px" width="100px" /></i>
                <br><br>
              <h5 class="card-title">Computer Engineering</h5><br><br>
            </a>
            </div>
          </div>
        </div>
                    <div class="col-lg-4 service-in text-center mt-5">
                        <div class="card">
            <div class="card-body">
              <a href="jview.php?category=ECE &c=Electronics Engineering Jobs"> <i><img src="images/ece.svg" height="100px" width="100px" /></i>
                            <br><br>
              <h5 class="card-title">Electronics Engineering</h5><br><br>
            </a>
            </div>
          </div>
                       
                    </div>
                       <div class="col-lg-4 service-in text-center mt-5">
                        <div class="card">
            <div class="card-body">
               <a href="jview.php?category=ME &c=Mechanical Engineering Jobs "><i><img src="images/me.svg" height="100px" width="100px"></i>
                <br><br>
              <h5 class="card-title">Mechanical Engineering.</h5><br><br>
            </a>
            </div>
          </div>
                       
                    </div>
                     <div class="col-lg-4 service-in text-center mt-5">
                        <div class="card">
            <div class="card-body">
              <a href="jview.php?category=Auto &c=Automobile Engineering Jobs"> <i><img src="images/me.svg" height="100px" width="100px" /></i><br><br>
              <h5 class="card-title">Automobile Engineering</h5><br><br>
            </a>
            </div>
          </div>
                       
                    </div>
                     <div class="col-lg-4 service-in text-center mt-5">
                        <div class="card">
            <div class="card-body">
               <a href="jview.php?category=Elect &c=Electrical Engineering Jobs"><i><img src="images/elect.svg" height="100px" width="100px" /></i><br><br>
              <h5 class="card-title">Electrical Engineering</h5><br><br>
            </div>
          </div>
                       
                    </div>
                     <div class="col-lg-4 service-in text-center mt-5">
                        <div class="card">
            <div class="card-body">
               <a href="jview.php?category=Civil &c=Civil Engineering Jobs"><i><img src="images/civil.svg" height="100px" width="100px"/></i><br><br>
              <h5 class="card-title">Civil Engineering</h5><br><br>
            </a>
            </div>
          </div>
                       
                    </div>
                </div>

            </div>
        </div>
    </section>


    </div>


    <!--/upload-->
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
                                <input type="email" class="form-control" id="validationDefault02" name="email" placeholder="" required="">
                            </div>

                            
                            <div class="form-group">
                                <label>Mobile
                                </label>
                                <input type="integer" class="form-control" id="password2" maxlength="10" name="mobile" placeholder="" required="">
                            </div>
                             <div class="form-group">
                                <label>Gender</label>
                                <input type="text" class="form-control" id="password2"  name="gender" placeholder="" required="required">
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