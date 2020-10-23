<?php

$API_key    = 'AIzaSyCM_ArLJBQ8S5_ZykUFkNaUoEw_fWvqJ5Q';
$channelID  = 'UCUpH2hBLOMa_QQkBUFfiWJg';
$maxResults = 50;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

// https://www.youtube.com/watch?v=sPMA1tqWuf4&list=PL8D4Iby0Bmm94U_rwuJuocyC1xFoPTd5R

// //AIzaSyCM_ArLJBQ8S5_ZykUFkNaUoEw_fWvqJ5Q



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
	<title>SingInTheRain</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script type="js/bootstrapjquery.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">


<style type="text/css">
	.demo-layout-transparent {
  background: url('./a.jpg') center / cover;
}
h2{
    color:white;

}
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
.card{
  margin: 2px;
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
        <a class="mdl-navigation__link" href="tamil.php">Tamil Album</a>
        <a class="mdl-navigation__link" href="">Users</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">SingIntheRain</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="malay.php">Malayalam</a>
      <a class="mdl-navigation__link" href="old.php">OldSongs</a>
      
    </nav>
  </div>


  <main class="mdl-layout__content">
<div class="mdl-grid">


 <!--  <div class="mdl-cell mdl-cell--8-col">
<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--6dp" style="width: 800px;">
  <thead>
    <tr>
      <th style="font-family: Impact;font-size: 22px;">Songs</th>
      <th style="font-family: Impact;font-size: 22px;">Image</th>
      <th style="font-family: Impact;font-size: 22px;">Lyrics</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="font-family: Impact;font-size: 19px;"></td>
      <td style="font-family: Impact;font-size: 19px;"></td>
      <td style="font-family: Impact;font-size: 19px;"></td>
    </tr>
   
  </tbody>
</table>
</div>




<div class="mdl-cell mdl-cell--4-col">
	
<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Aenan convallis.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      View Updates
    </a>
  </div>
</div>


</div>

 -->



<?php



// foreach($videoList->items as $item){
//     //Embed video
//     if(isset($item->id->videoId)){
//         echo '<div class="card">
//                 <iframe width="280" height="550" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
//                 <h2>'. $item->snippet->title .'</h2>
//             </div>';
//     }
// }



?>

<?php
    if (isset($_POST['submit']) )
     {
        $keyword = $_POST['keyword'];
               
        if (empty($keyword))
        {
            $response = array(
                  "type" => "error",
                  "message" => "Please enter the keyword."
                );
        } 
    }
         
?>
<h2 >Search Videos by keyword using YouTube Data API V3</h2>
<br>
<div class="search-form-container">
    <form id="keywordForm" method="post" action="">
        <div class="input-row">
            Search Keyword : <input class="input-field" type="search" 
                id="keyword" name="keyword"
                placeholder="Enter Search Keyword">
        </div>

        <input class="btn-submit" type="submit" name="submit"
            value="Search">
    </form>
</div>

<?php 
if(!empty($response)) { 
?>
<div class="response <?php echo $response["type"]; ?>
    ">
    <?php echo $response["message"]; ?>
</div>
<?php 
}
?>





<?php
if (isset($_POST['submit']) )
{
     
  if (!empty($keyword))
  {
    $apikey = 'AIzaSyCM_ArLJBQ8S5_ZykUFkNaUoEw_fWvqJ5Q';
   $maxResults = 50; 
    $googleApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $keyword . '&maxResults=' . $maxResults . '&key=' . $apikey;

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);

    curl_close($ch);
    $data = json_decode($response);
    $value = json_decode(json_encode($data), true);
?>

<div class="result-heading">About <?php echo $maxResults; ?> Results</div>
<div class="videos-data-container" id="SearchResultsDiv">

<?php
    for ($i = 0; $i < $maxResults; $i++) {
        $videoId = $value['items'][$i]['id']['videoId'];
        $title = $value['items'][$i]['snippet']['title'];
        $description = $value['items'][$i]['snippet']['description'];
        ?> 
    
<div class="video-tile">
<div  class="card">
    <iframe id="iframe" style=width="280" height="550"  frameborder="0" allowfullscreen src="//www.youtube.com/embed/<?php echo $videoId; ?>" 
data-autoplay-src="//www.youtube.com/embed/<?php echo $videoId; ?>?autoplay=1"></iframe>
<div class="videoTitle"><b><?php echo $title; ?></b></div>

</div>
<div class="videoInfo">

<!-- <div class="videoDesc"><?php// echo $description; ?></div> -->
</div>
</div>
           <?php 
        }
    } 
           
}
?> 





</div>
</main>

</div>
</div>


</body>
</html>