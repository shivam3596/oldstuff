<?php
include 'functions.php';
ob_start();
dbconnect();
?>
<html>
<head>
	<title>oldstuff</title>
	<link rel="icon" type="image/png" href="logo.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style1.css"/>
	<script type="text/javascript" src="script.js"></script>
	<style type="text/css" rel="stylesheet">
		#i1{
			background-color:#33CCFF;
		}
		#i2{
			background-color:#FF6666;
		}
		#i3{
			background-color:#33CCCC;
		}
		#i4{
			background-color:#FFCC33;
		}
		#i5{
			background-color:#33CCFF;
		}
		#txtHint{
			position: absolute;
			background-color: snow;
			padding-left:10px;
			min-width: 250px;
			width:100%;
		}
		li{
			list-style: none;
		}
		.sosoicon{
			height:40px;
			width:40px;
			-webkit-transition:-webkit-transform .3s;
			transition:-webkit-transform .3s;
			-moz-transition:-webkit-transform .3s;
		}
		.sosoicon:hover{
		-webkit-transform:rotate(10deg);
		transform:rotate(10deg);
		-moz-transform:rotate(10deg);
		}

		.soso{
			float:right;
			display:inline;
			padding-right:20px;
		}
		@media screen and (min-width: 322px) and (max-width: 699px) {
		.soso{
			padding:0px;
			float:none;
			display:inline;
		}
		}
		@media screen and (min-width: 699px) and (max-width: 995px) {
			.sosoicon{
			height:30px;
			width:30px;
			}
			.soso{
			padding-right:5px;
			display:inline;
			}
		}

	</style>
	<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
</head>
<body>
	<div class="header">
		<a class="logo" class="short-logo" href="index.php">OldStuff.in</a>
		<div class="navigation">
			<ul>
			<a href="sell.php"><li class="nav">Sell Items</li></a>
			<a href="contact.php"><li class="nav">Contact us</li></a>
			<a href="faq.php"><li class="nav">FAQ's</li></a>
			<li class="soso">
				<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.oldstuff.in"><img class="sosoicon" src="facebook.png"></img></a>
				<a href="https://twitter.com/home?status=http%3A//www.oldstuff.in"><img class="sosoicon" src="twitter.png"></a>
				<a href="https://plus.google.com/share?url=http%3A//www.oldstuff.in"><img class="sosoicon" src="g+.png"></img></a>
				<a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//www.oldstuff.in&title=oldstuff.in(Buy%20and%20sell%20used%20items)&summary=Buy%20and%20sell%20used%20items.&source="><img class="sosoicon" src="linkedin.png"></img></a>
			</li>
			</ul>
		</div>
	</div>
	<div class="content">
	<div  class="side ">
		<div class="choose">
			<center><img src="sell_lady.jpg" class="round"></img></center>
			<div class="list-item">
				<div class="tips">
					<p class="toppr">Tips For You</p>
					<p class="notes">&#9755; Search items you like to buy.</p>
					<p class="notes">&#9755; Call the seller and decide your own price.</p>
					<p class="notes">&#9755; Upload used items you want to sell.</p>
					<br>
					<p class="toppr">Address</p>
						<p class="notes">&#9742; Meerut institute of engg. and tech.(Meerut)</p>
				</div>
				<center><img src="android.jpg " width="100%" ></img></center><br>
					<p class="common">Choose Category</p>
				<ul class="fix" role="tablist">
					<a href="index.php?category=Calculator"><li id= "i1" class="item" >Calculator</li></a>
					<a href="index.php?category=Drafter"><li id= "i2" class="item" >Drafter</li></a>
					<a href="index.php?category=Book" ><li id= "i3"  class="item" >Book</li></a>
					<a href="index.php?category=Solved+paper%2FQuantum"><li id= "i4" class="item" >Solved paper/Quantum</li></a>
					<a href="index.php?category=Others"><li id= "i5" class="item" >Others</li></a>
					<br><br>
				<div class="owner">	
					<p class="toppr">Our Team</p>
					<p class="notes"><a href="http://www.w3chauhan.herokuapp.com" target="_black"> Shivam Kumar chauhan</a></p>
					<p class="notes"><a href="http://www.sanjaychouhan.net" target="_black"> Sanjay Chouhan</a></p>
					<p class="notes"><a href="http://www.commoc.comxa.com" target="_black"> Saurabh Baliyan</a></p>
					<br>
				</div>		
				<center><img src="android.jpg " width="100%" ></img></center><br>	
				</ul>
				
			</div>
		</div>
	</div>
	<div class="main-content">
		<div class="banner">
			<p class="toppr">How It Works</p>
		</div>
		<div >
			<img src="theme.png" class="theme"></img>
		</div>
		<div class="banner">
			<p class="toppr">Items We Provide</p>
		</div>
		<div >
			<img src="theme2.png" class="theme"></img>
		</div>
		<div class="result">
		<div class="banner">
			<p class="toppr">Search Items </p>
			
		</div>
		<div class="banner">
			<form name="searchForm" method="GET" action="index.php">
				<input class="search-box" type="text" name="search" placeholder="What are u looking for..." value="<?php if(isset($_GET['search'])&&!empty($_GET['search'])){echo $_GET['search'];} ?>" autosuggest="off" autocomplete="off" onkeyup="showHint(this.value)"></input> 
				<span id="txtHint"></span>
				<button class="btn">Search</button>
			</form>
		</div>
		<ul role="tabpanel" class="tab-pane active">
			<?php if (isset($_GET['search'])&&!empty($_GET['search'])){
				include 'search.php';
				}
				elseif(isset($_GET['category'])&&!empty($_GET['category'])){
					include 'category.php';
				}
				else{
					$sql="select id,title,price,mobile from items order by id desc limit 0,8";
					$query =mysql_query($sql);
					while($row=mysql_fetch_array($query)){
						$id=$row["id"];
						$title=$row['title'];
						$price=$row['price'];
						$mobile=$row['mobile'];
					?>

					<li class="container">
						<p class="title"><?php echo "$title"; ?>engineering books software engineering pdf version...</p>
						<img class="item-img" src="sell_lady.jpg" <?php echo "src=\"upload/$id.jpg\" alt=\"$title\""; ?>
						<p class="contact">Rs-500<?php echo $price; ?> | Mob-7830963823<?php echo "$mobile"; ?></p>
					</li>
					<?php }} ?>

			
		</ul>	
		</div>
			<div class="footer">
				&copy; copyright:2015<br>
				<?php
				
					@$htttp_client_ip=$_SERVER['HTTP_CLIENT_IP'];
					@$http_x_forwarded_for=$_SERVER['HTTP_X_FORWARDED_FOR'];
					$remote_addr = $_SERVER['REMOTE_ADDR'];
					
					if(!empty($http_client_ip)){
						$ip_address = $http_client_ip;
					}else if(!empty($http_x_forwarded_for)){
						$ip_address = $http_x_forwarded_for;
					} else {
						$ip_address = $remote_addr;
					}
						echo 'Your IP address '.$ip_address;
				?>
			</div>
		</div>
	</div>
<script  src="jquery.min.js"></script>
<script src="bootstrap.js"></script>	
</body>
</html>
<?php 
ob_flush(); ?>