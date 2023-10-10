<html>
<head>
	<title>PHP Form Design</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id = "main">
		<h1>Contact</h1>
		<hr>
		<?php
		//pull links from the nav.php page and places them in the navigation div
		require("nav.php")//require is not 100% needed for the site to run
		?>
		<br><br><hr>
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
				<div class="column">
				<label for="name">Full Name</label>
				</div>
				</div class="column2">
				<input type="text" id="name" name="name" placeholder=" Your Full Name">
				</div>
				</div>
			</div>
			
			<!-- email field -->
			<div class="row">
			<div class="column">
			<label for="email">Email adress</label>
			</div>
			<div class="column2">
			<input type="text" id="email" name="email" placeholder="Your email address">
			</div>
			</div>

			<!-- contact Number Field -->
			<div class="row">
			<div class="column">
			<label for="phone">Contact Number</label>
			</div>
			<div class="column2">
			<input type="text" id="phone" name="phone" placeholder="A contact number">
			</div>
			</div>
			
			<!-- subject Field -->
			<div class="row">
			<div class="column">
			<label for="message">Subject</label>
			</div>
			<div class="column2">
			<textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
			</div>
			</div>
			
			<!-- Submit Button-->
			<div class="row">
			<input type="submit" value="submit">
			</div>
	
			<!-- copyright statement -->
			<div id="footer">
			&copy; Copyright Riley Cosgriff, all rights reserved Tawa College 2023
			</div>
			
			</form>
</body>
</html>