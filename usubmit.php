<?php 
$n=$_REQUEST['name'];
$e=$_REQUEST['email'];
$p=$_REQUEST['password'];
$m=$_REQUEST['mobile'];


$con=mysqli_connect("localhost","root","","stoogle");
$ins="insert into employer values('','$n','$e','$p','$m',)";
$res=mysqli_query($con,$ins);
if($res>0)
{
	move_uploaded_file($ftmp,$path);
	header("location:index.php?msg=You are registered Now.");
}
else
{
	
	echo"<h1><i>".mysqli_error($con)."</i></h1>";
	header("location:index.php?msg=Duplicate email entry!");
    
}
mysqli_close($con);

?>	