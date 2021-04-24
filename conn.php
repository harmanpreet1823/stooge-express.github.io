<?php
$con=mysqli_connect("localhost","id8990878_root","123456","id8990878_stoogle");
if (!$con) {
	# code...
	echo "not connected";                                    
}
else
{
	echo "Connected";
	?>
	<!DOCTYPE html>
	<html>
	<head>
		

<meta http-equiv="refresh" content="0; url=http://index.php/">


	</head>
	<body>
	
	</body>
	</html>
	<?php
	//header('location:index.php?msg=Duplicate email entry!');
 exit;
}
?>