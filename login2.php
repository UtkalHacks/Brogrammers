<?php
	session_start();

	if(isset($_SESSION["uid"]))
	{
		header('location:userhome.php');
	}
	if(isset($_REQUEST["b1"]))
	{
		include "db.php";
		$user_id=mysqli_real_escape_string($con,$_POST["user_id"]);
		$password=mysqli_real_escape_string($con,$_POST["password"]);
		$password=md5($password);
		$result=mysqli_query($con,"select * from user_master where user_id='$user_id' and password='$password'");
		if($arr=mysqli_fetch_array($result))
		{
			$_SESSION['uid']=$user_id;
			header('location:userhome.php');
		}
		else
		{
			echo "invalid Details";
		}
	}
?>
<form method="POST">
	Username:<input type="" name="user_id"></input><br>
	Password:<input type="" name="password"></input><br>
	<input type="submit" name="b1" value="Login"></input>

	
</form>
<a href="forgot.php">forgot</a>|<a href="register.php">Sign up</a>