<?php
//our included config file
include "configadmin.php";
//check whether data with the name usename has been submitted
if (isset($_POST['username'])) {
	//variables to hold our submitted data with post
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$schoolid = $_POST['schoolid'];
	

	//our sql statement that we will execute
	$sql = "INSERT INTO `user` (`id`, `username`, `email`, `password`,`schoolid`) VALUES (NULL, '$username', '$email', '$password','$schoolid')";
	//Executing the sql query with the connection
	$re = mysqli_query($con, $sql);
	//Check to see whether request was true or false
	if ($re) {
		echo "Successfully Registered";
	}else{
		echo "An Error Occured";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST">
		                                   <p>Register</p>
		<input type="text" name="username" id="inputtext"placeholder="Username" required><br>
		<label for="inputEmail">Email address</label><br>
		<input type="email" name="email" id="inputEmail" placeholder="Email address" required autofocus><br>
		<label for="inputPassword">Password</label><br>
		<input type="password" name="password" id="inputPassword" placeholder="Password" required><br>
		<label for="inputschoolid">Schoolid</label><br>
		<input type="text" name="schoolid" id="inputschoolid" placeholder="schoolid" required><br>
		<button type="submit">Register</button><a href="login.php">Login</a>
	</form>
</body>
</html>




 <style type="text/css">
     /* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] ,input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
.avatar{
      
      border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  height: 200px;
  width: 50%;
}
.avatar:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
  </style>

