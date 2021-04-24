<?php session_start();
//$em=$_SESSION['email'];
$n=$_REQUEST['name'];
$s=$_REQUEST['sal'];
$a=$_REQUEST['address'];
$e=$_REQUEST['exp'];
$st=$_REQUEST['stream'];
$q=$_REQUEST['qual'];
$j=$_REQUEST['jtype'];
date_default_timezone_set("Asia/Kolkata");
		$dt=date("d/m/y");
	
		$ip=$_SERVER['REMOTE_ADDR'];
$c=$_REQUEST['cname'];
$em=$_REQUEST['email'];

$con=mysqli_connect("localhost","root","","stoogle");
$ins="insert into jobs values('','$n','$s','$a','$e','$st','$q','$j','$dt','$c','$em')";
$res=mysqli_query($con,$ins);
if($res>0)
{

	header("location:profile.php?msg=Job is uploaded");
}
else
{
	echo $s;
	echo"<h1><i>".mysqli_error($con)."</i></h1>";
	header("location:profile.php?msg= Job is Not uploaded");
    
}
mysqli_close($con);

?>	