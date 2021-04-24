<?php
$n=$_REQUEST['name'];
$e=$_REQUEST['email'];
$fn=$_FILES['pic']['name'];
$ft=$_FILES['pic']['type'];
$fs=$_FILES['pic']['size'];
$ftmp=$_FILES['pic']['tmp_name'];
$path="pic/".$fn;
$obj=mysqli_connect("localhost","root","","batch_08");
$q="insert into pic values('','$n','$e','$path')";
$res=mysqli_query($obj,$q);
if($res>0)
{
	move_uploaded_file($ftmp,$path);
	header("location:pic.php?x=upload");
}
?>