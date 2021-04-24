<?php
    include("header.php");
 

 ?>

   <section class="banner-bottom-w3layouts py-lg-5 py-lg-4 py-4">
        <div class="container">
            <div class="inner-sec-wthree-w3ls py-lg-4 py-4">
                <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                    <span>Visit</span>Explore Colleges</h3>
               <div class="owl-carousel owl-theme">
                <?php                      
            $category=$_REQUEST['category'];
                         
          $con=mysqli_connect("localhost","root","","stoogle");
          $sel="select * from  college where cat = '$category' limit 0,28 ";
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
            $cimg= $row['cimg'];  
            
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
                                    <a href="<?php echo "$row[desc]"; error_reporting(0);?>">
                                    <?php echo "<img src='$row[cimg]' alt='' width='600px' height='195px' class='img-luid'>"; ?>
                                </a>
                                <a href="<?php echo "$row[cat]";?>">
                                    <h5 class="card-title mt-3">
                                     <?php echo "$row[name]"; ?>
                                    </h5>
                                </a>
                                    <b><p style="color:black;"><?php echo "$row[cat]";?></p></b>
                                  	<p><?php echo "$row[address]"; ?></p>
                                  	<p style="color:black;"><?php echo "$row[rating]/5";?></p>
                                  	
                           
                                      <p class="card-text"></p>
                                        <ul class="property-box">
                                              <?php $l=$row[desc];
                                              error_reporting(0);?>
                                            <strong><li class="field-item text-center text-danger" ><a href = "<?php echo $l;?>">Link of Website</a>
                                            </li>  </strong>  
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
    
  <?php
    include("footer.php");
 ?>