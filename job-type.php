<!DOCTYPE html>
<html>
<head>
	<title>job type</title>
<link rel="stylesheet" type="text/css" href="job.css">
</head>
<body>
  <?php     /*                 
           $category=$_REQUEST['category'];            
          $con=mysqli_connect("localhost","root","","stoogle");
          $sel="select * from  jobs where category= '$category'";
          $run=mysqli_query($con,$sel);
          if($row=mysqli_fetch_array($run))
          {
            $id=$row['id'];
            $name=$row['name'];
            $sal=$row['sal'];
            $address=$row['address'];
            $exp=$row['exp'];
            $category= $row['category'];
            $qual= $row['desc'];
            $qual= $row['qual'];
            $jtype= $row['jtype'];
            $date= $row['date'];
            $cname= $row['cname'];
          }
           */
        ?>
  <div class=container>
    <div class="header-img">
      <div class="top-row">
        <div class="head">Collegiate</div>
        <div class="menu-btn">MENU</div>
      </div>
    </div>

<!-- Second container start here -->
    <div class="container2">
     <div class="heading">
      <span>
     	<h1>V I E W  J O B S</h1>
     </span>
     </div>
     <div class="left-part">
          <?php
/*
          while($row=mysqli_fetch_array($run))  
          {
              ?>
               <a href="single.php?cname=Education" style="text-decoration:none;">
                <div class="cont">
         <div class="con-head"><?php echo $row['name']; ?> </div>
          <div class="sub-head"><?php echo $row['cname']; ?> </div> 
          <div class="sub-head"><?php echo $row['address']; ?> </div>
          <div class="sub-head"><?php echo $row['sal']; ?> </div>
          <div class="sub-head">Posted on:<?php echo $row['date']; ?> </div>
        </div></a>
              <?php 
            }*/
          ?>
     	

    <!-- Job detail container starts here -->
    <div class="detail-cont" >
        <div class="con-head1">PHP Developer</div>
        <div class="sub-head1">Eureka Electrosoft Solution</div> 
        <div class="sub-head1">Jalandhar</div><br>
        <div class="sub-head1"><u>Eperience</u> - 2 years (min.)</div>
        <div class="sub-head1"><u>Qualification</u> - Diploma(min.)</div>
        <div class="sub-head1">Rs 14000 - 18000</div>
        <div class="sub-head1">Posted on 22/01/2019</div> 
    </div>


    <!-- Footer -->
    <div class="footer">  
      /*<svg height="500px" width="100%">*/
        <polygon points="0,0 2000,200 2000,500 0,500" style="opacity:1;z-index: 10; fill: #1f2123" />
      </svg>
   
    </div>  


  </div>
</body>
</html>