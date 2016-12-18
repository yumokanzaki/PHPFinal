<span id="background"></span>
	<div id="page">
		<div id="sidebar">
			<div id="logo">
				<a href="index.php">Welcome to the <br/> <em>Attack on Titan Database</em></a>
			</div> <!-- /#logo -->
			<ul id="navigation" class = "colorchange">
				<li><a href="about.php">About</a></li>
				<li><a href="index.php">Illustrations</a></li>
				<li><a href="images.php">Selected Images</a></li>
				<li><a href="contact-us.php">Contact Us</a></li>
				<li><a href="blog.php">Blog</a></li>
			</ul> <!-- /#navigation -->
			<ul id="connect">
				<li><a href="http://facebook.com/" target="_blank" class="facebook"></a></li>
				<li><a href="http://twitter.com/" target="_blank" class="twitter"></a></li>
				<li><a href="" class="link-us"></a></li>
			</ul> <!-- /#connect -->
			<div class="footer">
				&copy; Copyright &copy; 2016.<br/>
				<a href="index.php">Company name</a> all rights reserved.
						<script>
								function Clock() 
								{
									var today = new Date();
									var h = today.getHours();
									var m = today.getMinutes();
									var s = today.getSeconds();
										m = checkTime(m);
										s = checkTime(s);
										document.getElementById('txt').innerHTML =
										h + ":" + m + ":" + s;
									var t = setTimeout(Clock, 500);
								}
								function checkTime(x) 
								{
									if (x < 10) {x = "0" + x};  // add zero in front of numbers < 10
									return x;
								}
						</script>
		<body onload="Clock()">
<div id="txt"></div>			
			</div> <!-- /.footer -->
		</div>