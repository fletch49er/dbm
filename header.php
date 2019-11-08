<?php
/*
 *******************************************************************************
 * File:		header.php
 * Purpose:	Website header template
 *						
 * Author:	Mark Fletcher
 * Date:		18.04.2018
 *  
 * Notes: 
 *
 * Revision:
 *		18.04.2018	1st issue.
 *		23.11.2018	meta viewport tab added
 *		29.10.2019	references to external javascript and css files for new
 *								image carousel function added.
 *******************************************************************************
*/
//include login constants
include 'php/db_login.php';

//include php functions
include "php/dbm_functions.php";

//include php data files
include "php/data.php";

//connect to database	
try {
	$pdo = new PDO('mysql:host='.AUTH_HOST.'; dbname='.AUTH_DB.'', AUTH_USER, AUTH_PWD);
} catch (PDOException $e) {
	die("ERROR!: Could not connect: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="description" content="<?php echo metaFill('description'); ?>" />
<meta name="location" content="UK,Scotland,Glasgow,East Kilbride" />
<meta name="author" content="fletch" />
<meta name="copyright" content="(c) Mark Fletcher <?php echo date('Y'); ?>." />
<meta name="keywords" content="web designer,web design,website design,website designer,website design glasgow,web apps,application designer,application developer" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- , maximum-scale=1.0, user-scalable=0 --> 

<title>designs by mark - <?php echo metaFill('title'); ?></title>

<!--Get your code at fontawesome.com-->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!-- external javascript files -->
<script src="js/dbm_functions.js"></script>
<script src="js/imageCarousel.js"></script>

<!-- external font awesome 4 icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<!-- external stylesheet files -->
<link rel="stylesheet" type="text/css" href="styles/dbm.css"  />
<!-- include carousel stylesheet -->
<link rel="stylesheet" type="text/css" href="styles/carousel.css" />

<!-- favicon file -->
<link rel="Shortcut Icon" href="favicon.ico" />
</head>

<body>
<div id="wrapper" class="clearfix">
<header>
<img id="dbmGraphic" src="images/dbm_graphic.png" alt="designs by mark company logo" />
<img id="dbmLogo" src="images/dbm_logo.png" alt="designs by mark company text" />
</header><!-- end header -->

<div id="content" class="clearfix">
