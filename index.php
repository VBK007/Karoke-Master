<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$conn=mysqli_connect('localhost','root','');
if (!$conn) {
  # code...
  die("Connection errror".mysql_error());
}

$db=mysqli_select_db($conn,"sing");
if (empty($db)) {
  # code...
  $dbcr="CREATE DATABASE sing";
  $check=mysqli_query($conn,$dbcr);
  if (!$check) {
    # code...
    echo "Error";
  }
}






?>



<!DOCTYPE html>
<html>
<head>
	<title>KarokeApp</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script type="js/bootstrapjquery.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<style type="text/css">
.card{
	margin-top: 5%;
	width: 450px;

	opacity: .4;
}	

.section {
  position: relative;
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.section h1 {
  text-align: center;
  font-size: 6rem;
  font-family: "Cookie";
  padding: 20px;
  margin: 15px;
  z-index: 1;
  opacity: 0.7;
}

.video-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
}

.color-overlay {
  position: absolute;
  top: 0;
  left: 0;
  background-color: lightblue;
  width: 100%;
  height: 100vh;
  opacity: 0.5;
}


</style>

</head>
<body>

<div class="container-fluid">


<div class="section">

        <h1>Welcome To Paradise</h1>

        <div class="video-container">
            <div class="color-overlay"></div>
            <video autoplay loop muted >
                <source src="video.mp4" type="video/mp4">
            </video>
        </div>



	
<center>
	<div class="card" >
  <img src="img.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Welcome to Sing In the Rain</h5>
    
    <a href="dash.php" class="btn btn-primary">RockOn Baby</a>
  </div>
</div>
</center>





</div>


<div style="visibility:hidden">
    <audio autoplay loop>
        <source src="cc.mp3">
    </audio> 
</div>

</body>
</html>