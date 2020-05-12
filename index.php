<!DOCTYPE html>
<html>
<head>
	<title> ~ OBJEK WISATA DI INDONESIA ~ </title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body style="	background-image: url(1.png);background-size: cover;background-repeat: no-repeat;background-position: center;background-attachment: fixed;">
	
<div id="pembungkus">
	<div id="header"><font face="curlz mt"><b> ~ PANORAMA BUKIT SERELO LAHAT ~</b> </div>
	<div id="MenuHorizontal"><b>
				<ul>
					<li><a href="index.php?hal=home">Home</a></li>
					<li><a href="index.php?hal=pfl">Profile</a></li>
					<li><a href="index.php?hal=Abt">About Us</a></li>
					<li> <a href="#">Gallery</a>
						<ul>
					<li> <a href="gal.html">Foto</a></li>
				</ul>
					</li>
					<li><a href="index.php?hal=contact">Contact</a></li>
					<li><a href="index.php?hal=GuestBook">Guest Book</a></li>
				</ul></b>
		</div>
	<div id="isi">
				<div class="kiri"> 
					<h3 id="JUDULMENU" align="center"> KATEGORI </h3>
					<ul>
						<li><a href="#"> Kategori 1</a></li>
						<li><a href="#"> Kategori 2</a></li>
						<li><a href="#"> Kategori 3</a></li>
						<li><a href="#"> Kategori 4</a></li>
					</ul>
					</div>
				<div class="kanan"> 
						<?php
							if(empty($_GET['hal'])) {
								include "home.php";}
							else if ($_GET['hal'] == "home"){
								include "home.php";}
							else if ($_GET['hal'] == "pfl"){
								include "profile.php";}
							else if ($_GET['hal'] == "Abt"){
								include "aboutus.php";}
							else if ($_GET['hal'] == "gllry"){
								include "gal.html";}
							else if ($_GET['hal'] == "contact"){
								include "contact.php";}
							else if ($_GET['hal'] == "GuestBook"){
							include "gb.php";}
						?>
				</div>
			</div>
	<div id="footer"><font face="broadway">
	Copyright © alfrandi deokta 2020
</div>
</div>
	</body>
</html> 
</body>
</html>