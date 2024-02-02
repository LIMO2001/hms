<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$dob=$_POST['dob'];
$idno=$_POST['idno'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$password=md5($_POST['password']);
$gender=$_POST['gender'];
$query=mysqli_query($con,"insert into users(fullname,dob,idno,email,phoneno,password,gender) values('$fname','$dob','$idno','$email','$phone','$password','$gender')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	//header('location:user-register.php');
}
}
?>