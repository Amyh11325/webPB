<?php 

$zip_code = $_POST['zip_code'];

?>

<!DOCTYPE html>
<html>

  <head>
    <title>Lead Concentration Analysis</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Pontano+Sans&display=swap" rel="stylesheet">
    <link href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body> 
  	<div id = "intro">

	  	<h1>Lead Analysis for Zip Code<!--  <?php echo $zip_code; ?> --></h1>
	  	<h2>County:</h2>
	  	<h2>School:</h2>
	  	<!-- <img src="images/leadpipe-background.jpg"> -->
  	</div> 

  	<!-- <iframe width="800" height="500" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col2%2C+col0+from+1Bi29zBYSA6eHhg-CxRxnAM1QEq4FNcqkjbWY94RH+limit+1000&viz=HEATMAP&h=true&lat=41.927015562488286&lng=-73.680172432581&t=1&z=7&l=col2&y=2&tmplt=2&hmd=true&hmg=%2366ff0000%2C%2393ff00ff%2C%23c1ff00ff%2C%23eeff00ff%2C%23f4e300ff%2C%23f4e300ff%2C%23f9c600ff%2C%23ffaa00ff%2C%23ff7100ff%2C%23ff3900ff%2C%23ff0000ff&hmo=0.53&hmr=26&hmw=0&hml=GEOCODABLE"></iframe> -->

  	<img class="ny-lead-img" src="images/ny_lead.png">

  </body>

</html>