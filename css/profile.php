  <?php
    include("header.php");
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
			background: #fff;
			color: #000;
			transition: all 0.3s ease-out 0s;
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			
			<div class="leftpane col-xl-2 col-lg-2 col-sm-2 text-light text-center">
				<div class="contentbox pt-5 pb-5 bg-dark">
					<div class="box mt-1" data-target="#fill">View Job</div>
					<div class="box mt-1">Post a Job</div>
					<div class="box mt-1">View Applicants</div>
				</div>
			</div>
			<div id="fill" class="col-lg-10 col-xl-10 col-sm-10 bg-dark text-light" area-hidden="true" >
				<table class="table text-light">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Job Name</th>
				      <th scope="col">Salary</th>
				      <th scope="col">Address</th>
				      <th scope="col">Experience</th>
				      <th scope="col">Category</th>
				      <th scope="col">Description</th>
				      <th scope="col">Qualification</th>
				      <th scope="col">Job Type</th>
				      <th scope="col">Posted On</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td>Mark</td>
				      <td>Otto</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>	

			</div>


	
	</div>

</body>
</html>
	  <?php
    include("footer.php");
 ?>