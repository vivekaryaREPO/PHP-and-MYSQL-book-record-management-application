<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm');
$username=$_POST['username'];
$password=$_POST['password'];
$q="select * from login where username='$username' and password='$password';";
$result=mysqli_query($con,$q);
if($result !=null)
{
	$_SESSION['username']=$username;
	header('location:http://localhost:2233/BRM/Home.php');
}
?>