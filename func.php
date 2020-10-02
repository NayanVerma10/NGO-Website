<?php

$con=mysqli_connect("localhost:3307","root","","login");
if(isset($_POST['submit']))
{
	$username=$_POST['email'];
	$password=$_POST['password'];
	$query="select * from users where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>=1)
	{
		header("Location:homepage.php");
	}
	else
	{
		echo"<script>alert('Wrong Details');</script>";
		echo"<script>window.open('login.html','_self')</script>";
		
	}
}

if(isset($_POST['signup']))
{
	$username=$_POST['email'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$query="insert into users values('$username','$password')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('Registration Sucessful');</script>";
		echo"<script>window.open('login.html','_self')</script>";
	}
}
if(isset($_POST['fedex']))
{
	$name=$_POST['name'];
	$bank=$_POST['bank'];
	$email=$_POST['email'];
	$date=$_POST['date'];
		$comments=$_POST['comments'];
	$query="insert into kuss values('$name','$bank','$email','$date','$comments')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('your feedback is appreciated');</script>";
		echo"<script>window.open('homepage.html','_self')</script>";
	}
}
if(isset($_POST['join']))
{
	$name=$_POST['fname'];
	$bank=$_POST['city'];
	$email=$_POST['id'];
	$date=$_POST['birthday'];
		$comments=$_POST['comments'];
	$query="insert into rohite values('$name','$bank','$email','$date','$comments')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('your feedback is appreciated');</script>";
		
	}
}
echo"<script>window.open('submit.html')</script>";
?>
