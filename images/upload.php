<?php
  // Create database connection
 // Create database connection
  $msg = "";


  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
   
    // Get text
    

    // image file directory
    $target = "images/".basename($_FILES['image']['name']);
    $db = mysqli_connect("localhost", "root", "", "photos");
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
    // execute query
    mysqli_query($db, $sql);


  }
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
        $db = mysqli_connect("localhost", "root", "", "photos");
        $sql = "SELECT * FROM images";
        $result = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($result)){
          echo "<div id='img_div'>";
        echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['text']."</p>";
      echo "</div>";
        }
  ?>
 
 
  <form method="POST" action="upload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	name="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>