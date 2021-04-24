<?php
    include("header.php");
 ?>
<?php                      
            $category=$_REQUEST['category'];               
          $con=mysqli_connect("localhost","root","","stoogle");
          $sel="select * from  college  where cat ='$category'";
          $run=mysqli_query($con,$sel);
          if($row=mysqli_fetch_array($run))
          {
            $id=$row['id'];
            $name=$row['name'];
            $sal=$row['cat'];
            $address=$row['address'];
            $exp=$row['rating'];
            $category= $row['logo'];
            $qual= $row['desc'];
            $qual= $row['courses'];
            $jtype= $row['phone'];
            $date= $row['eimg'];
            $cname= $row['cimg'];
            
            }
          
           
        ?>
   <section class="banner-bottom-w3layouts py-lg-5 py-lg-4 py-4">
        <div class="container">
            <div class="inner-sec-wthree-w3ls py-lg-4 py-4">
                <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                    <span>Visit</span>Explore Colleges</h3>
               <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">

                                  

         
                             <div class="card-body">
                                    <a href="">
                                    <img src='<?php $row[cimg]?>' alt="Collegien" class="img-fluid">
                                </a>
                                <a href="http://www.mcpolyjal.com/">
                                    <h5 class="card-title mt-3">
                                    	Mehr Chand Polytechnic College , Jalandhar
                                    </h5>
                                </a>
                                    <b><p style="color:black;">Engineering</p></b>
                                  	<p>Near DAV College, Railway Crossing, Dayanand Nagar, Jalandhar, Punjab 144008</p>
                                  	<p style="color:black;">Rating : 4.5</p>
                                  	
                           
                                      <p class="card-text"></p>
                                      <a href="http://www.mcpolyjal.com/">
                                        <ul class="property-box">
                                            <strong><li class="field-item text-center text-danger" >www.mcpolyjal.com
                                            </li>  </strong>  
                                        </ul>
                                    </a>
                                </div>

                                  
                      </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <a href="">
                                    <img src="images/g1.jpg" alt="Collegien" class="img-fluid">
                                </a>
                                <a href="">
                                    <h5 class="card-title mt-3">
                                    	
                                    </h5>
                                </a>
                                    <b><p style="color:black;"></p></b>
                                  	<p></p>
                                  	<p style="color:black;">Rating : </p>
                            
                                  	<p>Ph.no</p>
                                      <p class="card-text"></p>
                                      <a href="">
                                        <ul class="property-box">
                                            <strong><li class="field-item text-center text-danger" >link
                                            </li>  </strong>  
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                 <div class="card-body">
                                    <a href="">
                                    <img src="images/g1.jpg" alt="Collegien" class="img-fluid">
                                </a>
                                <a href="">
                                    <h5 class="card-title mt-3">
                                    	
                                    </h5>
                                </a>
                                    <b><p style="color:black;"></p></b>
                                  	<p></p>
                                  	<p style="color:black;">Rating : </p>
                            
                                  	<p>Ph.no</p>
                                      <p class="card-text"></p>
                                      <a href="">
                                        <ul class="property-box">
                                            <strong><li class="field-item text-center text-danger" >link
                                            </li>  </strong>  
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                              <div class="card-body">
                                    <a href="">
                                    <img src="images/g2.jpg" alt="Collegien" class="img-fluid">
                                </a>
                                <a href="">
                                    <h5 class="card-title mt-3">
                                    	
                                    </h5>
                                </a>
                                    <b><p style="color:black;"></p></b>
                                  	<p></p>
                                  	<p style="color:black;">Rating : </p>
                            
                                  	<p>Ph.no</p>
                                      <p class="card-text"></p>
                                      <a href="">
                                        <ul class="property-box">
                                            <strong><li class="field-item text-center text-danger" >link
                                            </li>  </strong>  
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/g5.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">Learn Designing
                                    </h5>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i> New York City</p>
                                        <ul class="property-box">
                                            <li class="field-item text-left">
                                                
                                                <i class="fas fa-users"></i> 395 </li>
                                            <li class="field-item text-right">
    
                                                <i class="far fa-comments"></i> 25 </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/g6.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">Learn Photography
                                    </h5>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i> New York City</p>
                                    <ul class="property-box">
                                        <li class="field-item text-left">
                                            
                                            <i class="fas fa-users"></i> 355 </li>
                                        <li class="field-item text-right">

                                            <i class="far fa-comments"></i> 25 </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </section>

    <section class="banner-bottom-w3layouts py-lg-5 py-lg-4 py-4">
        <div class="container">
            <div class="inner-sec-wthree-w3ls py-lg-4 py-4">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <a href="">
                                    <img src="images/g2.jpg" alt="Collegien" class="img-fluid">
                                </a>
                                <a href="">
                                    <h5 class="card-title mt-3">
                                    	
                                    </h5>
                                </a>
                                    <b><p style="color:black;"></p></b>
                                  	<p></p>
                                  	<p style="color:black;">Rating : </p>
                            
                                  	<p>Ph.no</p>
                                      <p class="card-text"></p>
                                      <a href="">
                                        <ul class="property-box">
                                            <strong><li class="field-item text-center text-danger" >link
                                            </li>  </strong>  
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                 <div class="card-body">
                                    <a href="">
                                    <img src="images/g2.jpg" alt="Collegien" class="img-fluid">
                                </a>
                                <a href="">
                                    <h5 class="card-title mt-3">
                                    	
                                    </h5>
                                </a>
                                    <b><p style="color:black;"></p></b>
                                  	<p></p>
                                  	<p style="color:black;">Rating : </p>
                            
                                  	<p>Ph.no</p>
                                      <p class="card-text"></p>
                                      <a href="">
                                        <ul class="property-box">
                                            <strong><li class="field-item text-center text-danger" >link
                                            </li>  </strong>  
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                 <div class="card-body">
                                    <a href="">
                                    <img src="images/g2.jpg" alt="Collegien" class="img-fluid">
                                </a>
                                <a href="">
                                    <h5 class="card-title mt-3">
                                    	
                                    </h5>
                                </a>
                                    <b><p style="color:black;"></p></b>
                                  	<p></p>
                                  	<p style="color:black;">Rating : </p>
                            
                                  	<p>Ph.no</p>
                                      <p class="card-text"></p>
                                      <a href="">
                                        <ul class="property-box">
                                            <strong><li class="field-item text-center text-danger" >link
                                            </li>  </strong>  
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                  <div class="card-body">
                                    <a href="">
                                    <img src="images/g2.jpg" alt="Collegien" class="img-fluid">
                                </a>
                                <a href="">
                                    <h5 class="card-title mt-3">
                                    	
                                    </h5>
                                </a>
                                    <b><p style="color:black;"></p></b>
                                  	<p></p>
                                  	<p style="color:black;">Rating : </p>
                            
                                  	<p>Ph.no</p>
                                      <p class="card-text"></p>
                                      <a href="">
                                        <ul class="property-box">
                                            <strong><li class="field-item text-center text-danger" >link
                                            </li>  </strong>  
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/g5.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">Learn Designing
                                    </h5>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i> New York City</p>
                                        <ul class="property-box">
                                            <li class="field-item text-left">
                                                
                                                <i class="fas fa-users"></i> 395 </li>
                                            <li class="field-item text-right">
    
                                                <i class="far fa-comments"></i> 25 </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cource-box-info text-center rounded">
                            <div class="card">
                                <div class="card-body">
                                    <img src="images/g6.jpg" alt="Collegien" class="img-fluid">
                                    <h5 class="card-title mt-3">Learn Photography
                                    </h5>
                                    <p class="card-text">
                                        <i class="fas fa-map-marker-alt"></i> New York City</p>
                                    <ul class="property-box">
                                        <li class="field-item text-left">
                                            
                                            <i class="fas fa-users"></i> 355 </li>
                                        <li class="field-item text-right">

                                            <i class="far fa-comments"></i> 25 </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </section>
    
  <?php
    include("footer.php");
 ?>