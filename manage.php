<?php
		$op=$_REQUEST["b1"];
		$user_id=$_REQUEST["user_id"];
		$op();
		function delete(){
			global $user_id;
			include 'db.php';
			mysqli_query($con,"delete from user_master where user_id='$user_id'");
			header('location:viewusers.php');
		}
		function edit()
		{
			global $user_id;
			header('location:edit.php?user_id='.$user_id);
		}
?>