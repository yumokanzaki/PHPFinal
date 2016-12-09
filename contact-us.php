<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Attack on Titan Database - Contact</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />	
</head>
<body>
	<?php	
	include "phpheader.php"
	?>
<!-- /#sidebar -->		
		<div id="contents">
			<span class="header"></span>
			<div>
				<h3>Contact Us</h3>
			<p><strong> Customer service : </strong><br> 1-888-350-8322 </p>	
		    <p><strong> Find us at : </strong><br> 9035 33rd Court <br> 
			Oakley, New Hampshire <br> 93420-3421</p>
			<p><strong>Office Hours : </strong><br>
			 Monday - Thursday  :  8:30am - 12:00pm; 1:00pm - 5:30pm<br>
			 Lunch Hours : 12:00pm - 1:00pm <br>
			 Friday, Saturday, Sunday  :  Closed </p>
			<p><strong> Or email us at : </strong></p>
				<address>
					AOTDATABASE@DATACENTER.ORG
				</address>
				<p><strong> Feel free to leave some feedback : </strong></p>
				<form action = "feedback.php" method = "post">
					Username : <input type= "text" name = "name" /><br><br>
					<textarea name = "textfield" rows = "10" cols = "50"  id = "feedback"> </textarea><br>
					<input type = "submit" name = "comment" value = "Submit!" />
				</form>
			</div>
			<ul class="images">
				<li><img src="images/sexy-girl.jpg" alt="Img" /></li>
				<li><img src="images/girl-smiling3.jpg" alt="Img" /></li>
				<li><img src="images/long-bland-hair.jpg" alt="Img" /></li>
				<li><img src="images/girl-smiling4.jpg" alt="Img" /></li>
				<li><img src="images/family.jpg" alt="Img" /></li>
				<li><img src="images/shock.jpg" alt="Img" /></li>
				<li><img src="images/boy-with-headphones.jpg" alt="Img" /></li>
				<li><img src="images/fat-girl.jpg" alt="Img" /></li>
			</ul>
			<a href="index.php" class="img-gallery">Back to gallery >></a>
		</div> <!-- /#contents -->
	</div> <!-- /#page -->
</body>
</html>