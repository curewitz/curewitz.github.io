<?php
 $pageName = basename($_SERVER['PHP_SELF']);
 if ($pageName=="index.php") $pageIndex="current"; 
 if ($pageName=="about.php") $pageAbout="current";
 if ($pageName=="gallery.php") $pageGallery="current";
 if ($pageName=="services.php") $pageServices="current";
 if ($pageName=="contact.php") $pageContact="current";
 if ($pageName=="specials.php") $pageSpecials="current";
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <title>Upright Upholstery | upholstery, reupholstery, furniture</title>
        <link rel="shortcut icon" href="http://pcurewitz.com/images/favicon.ico">
        <meta name="Description" content="Upright Upholstery is a three generation family business specializing in upholstery">

</head>

<body>
	<header>
		<img src="../images/logo.png" alt="Upright Upholstery" height="100">
		<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="stylesheet" href="../styles/main.css">
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	
		<hgroup>
		<h1>Upright Upholstery</h1>
		<h2>250 North Street A12 Danvers, MA 01923</h2>
		<h2>(978)-777-4152</h2>
		</hgroup>
	</header>
	<nav id="nav">
		<ul>
		<li><a href="../index.php" class="<?php echo $pageIndex ?>">Home</a></li>
		<li><a href="../about.php" class="<?php echo $pageAbout ?>">About Us</a></li>
                <li><a href="https://onedrive.live.com/redir?resid=d8ed4d1ad53ca77!2128&authkey=!AMEhltJ5Psw3LNQ&ithint=album%2c" class="<?php echo $pageGallery ?>">Gallery</a></li>
		<li><a href="../services.php" class="<?php echo $pageServices ?>">Services</a></li>
                <li><a href="../contact.php" class="<?php echo $pageContact ?>">Contact Us</a></li>
		<li><a href="../specials.php" class="<?php echo $pageSpecials ?>">Specials</a></li>
		<li><a href="http://yellowpages.superpages.com/reviews/userrateit.jsp?EG=2&frombp=profile&LID=YxQCvwMBPml%2FepcG7YG%2FjA%3D%3D&lbp=1" class="review">Write a Review</a></li>
		</ul>
	</nav>
