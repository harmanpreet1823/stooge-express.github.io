<?php session_start();
$e=$_REQUEST['email'];
$p=$_REQUEST['password'];
$con=mysqli_connect("localhost","root","","stoogle");
$sel="select * from employer where email='$e' and password='$p'";
$run=mysqli_query($con,$sel);
if($row=mysqli_fetch_array($run))
{
	$_SESSION['email'] = $e;	
	header("location:index.php?msg=You have Logged In Successfully.");

}
else
{   
	header("location:index.php?msg=Details are incorrect");
}
mysqli_close($con);