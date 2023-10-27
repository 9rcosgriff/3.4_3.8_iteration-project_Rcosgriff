<html>
<head>
		<title>2023 FIFA womens world cup</title>
		<meta charset="utf-8">
		<meta name="Keywords" content="2023 FIFA womens world cup, FIFA, world cup, Football"/> 
		<meta name="Author" content="Riley cosgriff"/>
		<meta name="description" content="2023 Fifa womens world cup infomation website"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/stylev3.css">
</head>
<body>
	<div id = "main">
		<h1>Contact</h1>
		<hr>
	  <div class="nav">
	  <nav align="center">
			<ul>
			<li><a href="Homev3.html">Home</a></li>
			<li><a href="Resultsv3.html"/>Results</a></li>
			<li><a href="Formv3.php">contact</a></li>
			</ul>
	 </div>
		<?php
			//get the connection to the database in phpmyadmin
			require_once("13dit_phpForm_mysqli.php");
		?>
		<br><br><hr><br>
	</div>

<!-- form starts here -->
		<div class="contact_container">
			<form action="connect.php" method="post">
			<div class="row">
				<div class="column3">
				<label for="name">Full Name</label>
				</div>
				<div class="column2">
				<input type="text" id="name" name="name" placeholder=" Your Full Name">
				</div>
				</div>
			
			<!-- email field -->
			<div class="row">
			<div class="column3">
			<label for="email">Email adress</label>
			</div>
			<div class="column4">
			<input type="text" id="email" name="email" placeholder="Your email address">
			</div>
			</div>

			<!-- contact Number Field -->
			<div class="row">
			<div class="column3">
			<label for="phone">Contact Number</label>
			</div>
			<div class="column4">
			<input type="text" id="phone" name="phone" placeholder="A contact number">
			</div>
			</div>
			
			<!-- subject Field -->
			<div class="row">
			<div class="column3">
			<label for="message">Subject</label>
			</div>
			<div class="column4">
			<textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
			</div>
			</div>
			
			<!-- Submit Button-->
			<div class="row">
			<input type="submit" value="submit">
			</div>
	</div>
	
			<!-- copyright statement -->
	 	  <div class="footer">	&copy; Copyright Riley Cosgriff, all rights reserved Tawa College 2023</div>
			
			</form>
</body>
</html>