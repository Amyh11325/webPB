<!DOCTYPE html>
<html>

  <head>
    <title>Lead Concentration Analysis</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Pontano+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <style>
	.parallax {
	  /* The image used */
	  background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/leadpipe-background.jpg');

	  /* Set a specific height */
	  min-width: 100%;
	  min-height: 100vh;
	  /* Create the parallax scrolling effect */
	  background-attachment: fixed;
	  background-position: center;
	  background-repeat: no-repeat;
	  background-size: cover;
	}
	</style>
  </head>

  <body> 
  	<div class="parallax">
  		<h1 class="main-title">Lead Concentration in Water</h1>
		<div id="inputform"> 
			<h3>Enter your zip code and find the lead concentration <br>in water in New York public schools</h3>
			<form action="lead_analysis.php" method="post">
				<input class="zip_code" type="text" name="zip_code" placeholder="ZIP Code">
				<button class="submit-btn" type="submit" name="submit-btn" style="background-color: transparent; border:none;"><i class="fa fa-angle-right" style="color: white; font-size: 30px; margin-left: 10px;"></i></button>
			</form> 
		</div>
  	</div> 

  </body>

</html>