<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$conn=mysqli_connect('localhost','root','');
if (!$conn) {
  # code...
  die("Connection errror".mysql_error());
}

$db=mysqli_select_db($conn,"sing");
if (empty($db)) {
  # code...sss
  $dbcr="CREATE DATABASE sing";
  $check=mysqli_query($conn,$dbcr);
  if (!$check) {
    # code...
    echo "Error";
  }

}

$table="select * from 'users'";
$ct=mysqli_query($conn,$table);
if (!$ct) {
  # code...
  $create="CREATE TABLE users(name varchar(10) NOT NULL,email varchar(255)
  NOT NULL,no varchar(255) NOT NULL)";

  $ok=mysqli_query($conn,$create);


}




$ab=$_POST['username'];
$bc=$_POST['email'];
$d=$_POST['no'];


// $sql = 'INSERT INTO users '.
//       '(name,email,no) '.
//       'VALUES ( "guest", "XYZ", "2000" )';





// if (isset($_POST['save'])) {


$sl=mysqli_query($conn,"INSERT INTO users(name,email,no) 
     VALUES('aaa','bbb','123')");
//}
if (!$sl) {
	# code...
	echo "cannot insert data".mysqli_error($conn);
}

// if (isset($_POST['save'])) {

// $sl=mysqli_query($conn,"INSERT INTO users(name,email,no) 
//     VALUES('$ab','$bc','$d')");


// }
// elseif (!$sl) {
// 	# code...
//   echo "Canot Insert Data".mysqli_error($conn) ;


// }






?>





<!DOCTYPE html>
<html>
<head>
	<title>UserLogin</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script type="js/bootstrapjquery.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css">
	td{
		font-size: 30px;
		font-family: inherit;
	}

	.card{
		height: 450px;
	}
</style>

</head>
<body>
<form>
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
        <a class="mdl-navigation__link" href="e.php">English  Album</a>
        <a class="mdl-navigation__link" href="e.php">Tamil Album</a>
        <a class="mdl-navigation__link" href="user.php">Users</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">SingIntheRain</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="e.php">Malayalam</a>
      <a class="mdl-navigation__link" href="up.php">UploadMusic</a>
      
    </nav>
  </div>
  <main class="mdl-layout__content">
<div class="mdl-grid">

<div class="container">
	<div class="col-lg-12">
		<div class="form-group">
			<form method="POST" action="user.php"
class="form-control" autocomplete="on" name="theform"
			 >


<table border="2" class="card">
	<tr>
		<td style="font-size: 33px;">
			<label>Enter Name</label>
			<input type="text" name="enterusername"id="username"
value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"

			>


		</td>





	</tr>



	<tr>
		<td>
			<label>Enter Email</label>
			<input type="emil" name="email" id="email"
value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"
			>
		</td>





	</tr>
<tr>
	<td>
		<label>Enter Number</label>
		<input type="number" name="number" id="no"
value="<?php echo isset($_POST['no']) ? $_POST['no'] : '' ?>"
		>

	</td>

</tr>

<tr>
	<td>
		<inut type="submit" class="btn btn-primary" name="save" id="save" value="save">SUBMIT </inut>
		<input type="reset" name="reset" class="btn btn-danger">
	</td>

</tr>




</table>				





			</form>


		</div>


	</div>


</div>










</div>

  
</main>




</body>
</html>