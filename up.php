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

$table="select * from 'fweight'";
$ct=mysqli_query($conn,$table);
if (!$ct) {
  # code...
  $create="CREATE TABLE songs(sno int(10)  NOT NULL  PRIMARY KEY AUTO_INCREMENT,name varchar(10) NOT NULL,location varchar(255)
  NOT NULL,Image varchar(255) NOT NULL,
  Album varchar(10) NOT NULL,
  Lyrics varchar(255) NOT NULL)";

  $ok=mysqli_query($conn,$create);


}
$file_name = $_FILES['um']['sname'];
 $new_file_name=$_FILES['um']['sname'];
 $target_path = "Audios/".$new_file_name;

$simage=$_POST['ui'];
$sadio=$_POST['um'];
$slyrics=$_POST['ul'];
$salbum=$_POST['sel'];



















?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script type="js/bootstrapjquery.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<style type="text/css">
	h1{
		font-family: inherit;
		color: white;
	}
option{
	font-size: 22px;
}

	.btn-primary{
		font-size: 22px;
	}
</style>


</head>
<body>

	<div class="section">
<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Sing In The Rain</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index.php" style="">Home</a>
        <a class="mdl-navigation__link" href="">English  Album</a>
        <a class="mdl-navigation__link" href="">Tamil Album</a>
        <a class="mdl-navigation__link" href="">Users</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">SingIntheRain</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Malayalam</a>
      <a class="mdl-navigation__link" href="up.php">UploadMusic</a>
      
    </nav>
  </div>
<div class="container">
	<div class="col-lg-12">
		<h1>Upload The music</h1>

	</div>


	<div class="col-lg-12">
		<form method="POST" class="card" style="width: 800px;height: 70px;">
			<table border="2">

				<thead>
					<tr>

					<th>
						UploadImage
					</th>

					<th>
						UploadMusic
					</th>
					<th>
						Uploadlyrics
					</th>
<th>
	Album
</th>

				</tr>
				</thead>
				
					<tr>
						<td>
							<input type="file" name="UploadImage" id="ui">
						</td>

<td>
	<input type="file" name="UploadMusic" id="um">
</td>

<td>
	<input type="text" name="Uploadlyrics" id="ul">
</td>
<td>
	<select name="Album" id="sel">
		<option>English</option>
		<option>Tamil</option>
		<option>Telugu</option>
		<option>Malayalam</option>
		<option>TamilAlbum</option>
		<option>90'sSong</option>
		<option>LoveSongs</option>
	</select>
</td>


					</tr>

			

			</table>






		</form>


<button type="submit" id="sub" class="btn btn-primary">Submit</button>
						<button type="reset" id="reset" class="bn btn-danger"> Reset</button>




	</div>
</div>





</body>
</html>