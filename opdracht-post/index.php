<?php
	var_dump( $_POST);
$username = 'rector';
$password = 'magnificus';
$message	=	'Gelieve in te loggen';

	if ( isset( $_POST ['submit'] ) )
	{
		if ( $_POST['username'] == $username && $_POST['password'] == $password )
		{
			$message	=	'Welkom!';
		}
		else
		{
			$message	=	'Er ging iets mis tijdens het inloggen. Probeer opnieuw.';
		}
	}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>YourUniversity</title>
	<link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="wrapper"><!-- #wrapper -->

	<nav><!-- top nav -->
		<div class="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
	</nav><!-- end of top nav -->

	<header><!-- header -->
		<img src="images/littlelogo.png" alt="" class="littlelogo" />
		<h1><a href="#">Saint Steven University</a></h1>
		<h2>Acquiring wisdom since 1982</h2>
		<img src="images/headerimg.jpg" width="940" height="200" alt="" class="mainimg"><!-- header image -->
	</header><!-- end of header -->
	
	<section id="main"><!-- #main content and sidebar area -->

		<aside id="sidebar1"><!-- sidebar1 -->
				<h3>Things To Do</h3>
					<ul>
						<li><a href="#">Play Games</a></li>
						<li><a href="#">Chat With Friends</a></li>
						<li><a href="#">Swap Stories</a></li>
						<li><a href="#">Sell Stuff</a></li>
						<li><a href="#">Buy Stuff</a></li>
						<li><a href="#">Trade Stuff</a></li>
					</ul>
					
				<h3>Sponsors</h3>
					<img src="images/ad125.jpg" alt="" /><br /><img src="images/ad125.jpg" alt="" /><br /><br />

				<h3>Related Articles</h3>
					<ul>
						<li><a href="#">Curabitur sodales</a></li>
						<li><a href="#">Sed dignissim</a></li>
						<li><a href="#">Fusce nec</a></li>
						<li><a href="#">Curabitur sodales</a></li>
						<li><a href="#">Sed dignissim</a></li>
						<li><a href="#">Fusce nec</a></li>
					</ul>

				<h3>Connect With Us</h3>
					<ul>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
					</ul>

		</aside><!-- end of sidebar1 -->

			<section id="content"><!-- #content -->
			
        		<article>
							<h2>Login</h2>
							<form action="index.php" method="post">
							<fieldset>
								<p><?php echo $message ?></p>
								<ul class="form"> 
    							<li> 
								<label for="username">Username</label>
								<input type="username" name="username" type="text" autofocus>
								</li> 
								<li> 
								<label for="password">Password</label>
								<input type="password" name="password" type="text">
								</li> 
								<li> 
								<button type="submit" name="submit">Verzenden</button> 
								</li> 
								</ul>
							<fieldset>
							</form>
						</article>
						
			</section><!-- end of #content -->

		<aside id="sidebar2"><!-- sidebar2 -->
				<h3>Stuff</h3>
					<ul>
						<li><a href="#">Curabitur sodales</a></li>
						<li><a href="#">Sed dignissim</a></li>
						<li><a href="#">Fusce nec</a></li>
						<li><a href="#">Nulla quis</a></li>
					</ul>

				<h3>More Stuff</h3>
					<ul>
						<li><a href="#">Blah, blah and all blah</a></li>
						<li><a href="#">More blah</a></li>
					</ul>

				<h3>S'more Goodies</h3>
					<ul>
						<li><a href="#">Curabitur sodales</a></li>
						<li><a href="#">Sed dignissim</a></li>
						<li><a href="#">Fusce nec</a></li>
						<li><a href="#">Nulla quis</a></li>
						<li><a href="#">Curabitur sodales</a></li>
						<li><a href="#">Sed dignissim</a></li>
						<li><a href="#">Fusce nec</a></li>
						<li><a href="#">Nulla quis</a></li>
					</ul>

				<h3>Did You Know?</h3>
					<ul>
						<li><a href="#">Curabitur sodales</a></li>
						<li><a href="#">Sed dignissim</a></li>
						<li><a href="#">Fusce nec</a></li>
						<li><a href="#">Nulla quis</a></li>
						<li><a href="#">Curabitur sodales</a></li>
						<li><a href="#">Sed dignissim</a></li>
						<li><a href="#">Fusce nec</a></li>
						<li><a href="#">Nulla quis</a></li>
					</ul>

				<h3>FAQ</h3>
					<ul>
						<li><a href="#">Curabitur sodales</a></li>
						<li><a href="#">Sed dignissim</a></li>
						<li><a href="#">Fusce nec</a></li>
						<li><a href="#">Nulla quis</a></li>
						<li><a href="#">Curabitur sodales</a></li>
						<li><a href="#">Sed dignissim</a></li>
						<li><a href="#">Fusce nec</a></li>
						<li><a href="#">Nulla quis</a></li>
					</ul>

		</aside><!-- end of sidebar -->

	</section><!-- end of #main content and sidebar-->
	
		<footer>
		<section id="footer-area">

			<section id="footer-outer-block">
					<aside class="footer-segment">
							<h4>Friends</h4>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
								</ul>
					</aside><!-- end of #first footer segment -->

					<aside class="footer-segment">
							<h4>Awesome Stuff</h4>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
								</ul>
					</aside><!-- end of #second footer segment -->

					<aside class="footer-segment">
							<h4>Coolness</h4>
								<ul>
									<li><a href="#">one linkylink</a></li>
									<li><a href="#">two linkylinks</a></li>
									<li><a href="#">three linkylinks</a></li>
								</ul>
					</aside><!-- end of #third footer segment -->
					
					<aside class="footer-segment">
							<h4>Blahdyblah</h4>
								<p>&copy; 2010 <a href="#">yoursite.com</a> Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
					</aside><!-- end of #fourth footer segment -->

			</section><!-- end of footer-outer-block -->

		</section><!-- end of footer-area -->
	</footer>
	
</div><!-- #wrapper -->
<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>
