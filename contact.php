<?php
	require('functions.php');
	dbconnect();
	require('getmessage.php');
	

?>
<html>
<head>
	<title>oldstuff</title>
	<link rel="icon" type="image/png" href="logo.png" />
	<link rel="stylesheet" type="text/css" href="signupcss.css"></link>
</head>
<body>
	<div class="header">
		<a class="logo" href="index.html">OldStuff.in</a>
	</div>	
	<div class="logimage">
		<div class="login">
			<p class="message">Get in touch</p><center><hr class="line"><center><br>
			<form action="contact.php" method="POST" class="form" >
				<p class="instruct">Name</p><input class="search-box" name="name" placeholder="Name" maxlength="25"  required></input><br>
				<p class="instruct">Email</p><input class="search-box" name="email" placeholder="Email" maxlength="50" required></input><br>
				<p class="instruct">College</p><input class="search-box" name="college" placeholder="Your college name" maxlength="50" required></input><br>
				<p class="instruct">Message</p><textarea class="search-box" name="message" placeholder="Message here..." maxlength="300" required></textarea><br>
				<button class="btn">Send</button><br>
			</form>
		</div>	
		<div class="contact_image">	
			<img src="contact.png" class="round"></img>
		</div>
	</div>		
</body>
</html>