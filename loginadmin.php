<?php
//our included config file
include "configadmin.php";
//starting our session to preserve our login
session_start();
//check whether data with the session name username has already been created
//if so redirect to hhomepage
if (isset($_SESSION['username'])) {
   //redirecting if there is already a session with the name username
   header("Location: welcome.php");
}
//check whether data with the name username has been submitted
if (isset($_POST['username'])) {
   //variables to hold our submitted data with post
   $username = $_POST['username'];
   $pass = md5($_POST['password']);
   //our sql statement that we will execute
   $sql = "SELECT * FROM user WHERE username='$username' AND password='$pass'";
   //Executing the sql query with the connection
   $re = mysqli_query($con, $sql);
   //check to see if there is any record / row in the database
   //if there is then the user exists
   if (mysqli_num_rows($re)) {
      //echo "Welcome";
      //creating a session name with username ad inserting the submitted username
      $_SESSION['username'] = $username;
      //redirecting to homepage
      header("Location: adminwelcome.php");
   }else{
      //display error if no record exists
      echo "Error : Invalid Login Credentials";
   }
}

?>
<!DOCTYPE html>
<html>
<head>
   <title>Login</title>

</head>
<body>
  <style type="text/css">
     /* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
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
  margin: 24px 0 12px 0;
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










      <form method="POST">
  <div class="imgcontainer">
    <img src="images/avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" placeholder="Username" required>

    <label for="inputPassword"><b>Password</b></label>
    <input type="password" placeholder="Password" name="password" id ="inputPassword" required>

    <button type="submit">Login</button><a href="registeradmin.php">Register</a>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="password"> <a href="#">Forgot password?</a></span>
  </div>
</form>
</body>
</html>