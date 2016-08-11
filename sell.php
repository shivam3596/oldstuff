<?php
require('upload.php');

?>
<html>
<head>
	<title>oldstuff</title>
	<link rel="stylesheet" type="text/css" href="signupcss.css"></link>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="header">
		<a class="logo" class="short-logo" href="index.html"><span class="red">Old</span><span class="blue">Stuff</span>.in</a>
	</div>	
	<div class="logimage">
		<div class="login">
			<p class="message">Sell your items</p><center><hr class="line"><center><br>
			<form action="sell.php" class="form" method="POST" enctype="multipart/form-data" >
				<span class="instruct">Choose a category</span><br>
				<select class="search-box" name="category" required>	
					<optgroup label="select category">
						<option >Calculator</option>
						<option >Drafter</option>
						<option >Book</option>
						<option >Solved paper/Quantum</option>
						<option >Others</option>
					</optgroup>
				</select><br>
				<span class="instruct">Add Title</span><br>
					<input class="search-box" name="title"  placeholder="Add title to the item" maxlength="45" type="text" required></input><br>
				<span class="instruct">Price</span><br>
					<input class="search-box" name="price"  placeholder="Demanded Price"  type="number" required></input><br>
				<span class="instruct">Mobile number</span><br>
					<input class="search-box" name="mobile" placeholder=" 10 digit mobile no"  type="number" required></input><br>
				<span class="instruct">Upload an image of item</span><br><br>
					<input class="custom-file-input" type="file" accept=".png,.jpg,.jpeg" name="image" required>
				<button class="btn" name="submit">Submit</button><br>
			</form>
		</div>
		<div class="contact_image">	
			<img src="sell_lady.jpg" class="round"></img>
		</div>
	</div>	
</body>
</html>	