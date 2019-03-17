<?php
//MySQLi connection
$con = mysqli_connect("localhost","root","","useradmin");

// Check connection for any errors
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
?>