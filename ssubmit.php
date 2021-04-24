<?php session_start();
$n=$_REQUEST['name'];
$e=$_REQUEST['email'];
//$p=$_REQUEST['password'];
$m=$_REQUEST['mobile'];
$g=$_REQUEST['gender'];
$fn=$_FILES['resume']['name'];
$ft=$_FILES['resume']['type'];
$fs=$_FILES['resume']['size'];
$ftmp=$_FILES['resume']['tmp_name'];
$path="images/".$fn;
$q=$_REQUEST['qual'];
$con=mysqli_connect("localhost","root","","stoogle");
$ins="insert into student values('$n','$e','$m','$g','$path','$q')";
$res=mysqli_query($con,$ins);
if($res>0)
{
	move_uploaded_file($ftmp,$path);
	header("location:index.php?msg=Details uploaded");
}
else
{
	
	echo"<h1><i>".mysqli_error($con)."</i></h1>";
	
    
}
mysqli_close($con);

?>	