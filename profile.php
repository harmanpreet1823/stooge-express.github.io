  <?php
    include("header.php");
 ?>

 <?php          
                 $msg= $_REQUEST['msg'];      
                  $c = $_SESSION['email'];
                  $r=1;
              if (isset($msg)){

                        echo "<script>alert('$msg');</script>";
       }

                  $con=mysqli_connect("localhost","root","","stoogle");
          $sel="select * from  student ORDER BY name DESC ";
          $run=mysqli_query($con,$sel);
          if($row=mysqli_fetch_array($run))
          {
            $id=$row['name'];
            $name=$row['email'];
            $mobile=$row['mobile'];
            $gender=$row['gender'];
            $resume=$row['resume'];
            $qual= $row['qual'];
          
         
          }
       
        ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        .contentbox{
            height: 660px;
        }
        .box:hover
        {
            cursor:pointer;
            background: #333;
            color: #fff;
            transition: all 0.3s ease-out 0s;
        }
        a{
            color: inherit;
        }
        a:hover{
            color:#fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
<br>
	<div class="container-fluid">
		<div class="row">
			
			<div class="leftpane col-xl-2 col-lg-2 col-sm-2 text-dark text-center">
				<div class="contentbox pt-5 pb-5 bg-light">
					<div class="box mt-1 " data-target="#upload"><h5>View Applicants </h5></div>
					<div class="box mt-1"><a href="#" data-toggle="modal" data-target="#upload"><h5>Post a Job</h5></a></div>
					
				</div>
			</div>
			<div id="fill" class="col-lg-10 col-xl-10 col-sm-10 bg-light text-dark" area-hidden="true" >
				<table class="table text-dark">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Applicant Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Mobile</th>
				      <th scope="col">Gender</th>
				      <th scope="col">Resume</th>
				    
				      <th scope="col">Qualification</th>
				    
				    </tr>
				  </thead>
				  <tbody>
				    <tr>   <?php

          while($row=mysqli_fetch_array($run))  
          {
              ?>
         
				      <th scope="row"><?php echo $r ?></th>
				      <td><?php echo $row['name']; ?></td>
				      <td><?php echo $row['email']; ?></td>
				      <td><?php echo $row['mobile']; ?></td>
				      <td><?php echo $row['gender']; ?></td>
				      
                      <td ><a href="<?php echo $row['resume']; ?>"><?php  $row['resume']; ?>Resume</td></a>
				      <td><?php echo $row['qual']; ?></td>
				     
				    </tr>

                <?php  $r++;} ?>
				
				  </tbody>
				</table>	

			</div>


	
	</div>
<!--/upload-->
    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="signup">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Post a Job</h5>
                        <form action="jsubmit.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Name of Job</label>

                                <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="Enter you Job name" required="required">
                            </div>
                             <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="validationDefault02" name="email" placeholder="example@eg.com" required="">
                            </div>
                            <div class="form-group">
                                <label>Salary</label>
                                <input type="integer" class="form-control" id="validationDefault02" name="sal" placeholder="eg.12,000-50,000" required="">
                            </div>

                            
                            <div class="form-group">
                                <label>Address
                                </label>
                                <input type="text" class="form-control" id="password2"  name="address" placeholder="eg.304,Kartarpur, Jalandhar, Punjab" required="">
                            </div>
                              <div class="form-group">
                                <label>Experience( Duration in years)
                                </label>
                                <input type="number" class="form-control" id="password2" name="exp" placeholder="" required="">
                            </div>
																		  
                                <div class="form-group">
                                <label>Stream</label>
                                <select name="stream" class="form-control">
                    <option selected="selected" disabled="disabled">Select any one</option>
                    <option>CSE</option>
                    <option>ECE</option>
                    <option>ME</option>
                    <option>AUTO</option>
                    <option>ELECT</option>
                    <option>CIVIL</option>
                    </select>
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
                               <div class="form-group">
                                <label>Job Type</label>
                                <select name="jtype" class="form-control">
                    <option selected="selected" disabled="disabled">Select Type of Job</option>
                    <option>Part-Time</option>
                    <option>Full-TIme</option>
                  
                    </select>
                            </div>
  							<div class="form-group">
                                <label>Company Name</label>
                                <input type="integer" class="form-control" id="validationDefault02" name="cname" placeholder="Enter you company name" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4" name="login">Upload</button>
                           
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->
</body>
</html>
	  <?php
    include("footer.php");
 ?>