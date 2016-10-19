<?php
	include_once 'assets/config.php';
	include 'models/Model_Artikel.php';
	include 'models/Model_Author.php';
	include 'models/Model_Komentar.php';

	use models\_model_artikel\Model_Artikel as Artikel;
	use models\_model_author\Model_Author as Author;
	use models\_model_komentar\Model_Komentar as Komentar;

	$artikel = new Artikel();
	$author = new Author();
	$komentar = new Komentar();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Achmad Chadil Auwfar</title>
		<meta charset="utf-8">
		<link rel="icon" href="assets/img/favicon.png" type="image/png">

		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<header>
			<div class="container">
				<div id="logo">
					<img src="assets/img/favicon.png" id="img-logo">
					<h1 id="title-logo">
						My Blog v.2
						<span id="desc-logo">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.
						</span>
					</h1>
				</div>
				<div class="clearfix"></div>
				<nav>
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>