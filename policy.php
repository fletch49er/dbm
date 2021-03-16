<?php
/*
 *******************************************************************************
 * File:		policy.php
 * Purpose: website policy template page
 *
 * Author:	Mark Fletcher
 * Date:		18.04.2018
 *
 * Notes:
 *
 * Revision:
 *		18.04.2018	1st issue.
 *		30.12.2019	Navbar page removed. New create_navbar() function and
 *								navigation div added
 *
 *******************************************************************************
*/
//array of policy pages
$policyPages = [
	'termsConditions' => ['terms &amp; conditions'],
	'privacyPolicy' => ['privacy policy'],
	'disclaimer' => ['disclaimer'],
	'copyright' => ['copyright']
];

//inclide header
require_once('header.php');
?>
<div id="sidebar">
<div id="address">
<?php include 'address.php'; ?>
</div><!-- end #address -->
<img class="sideImg" src="images/gs-pr_page.png" title="golfscotland.net website - MDA Media Ltd" alt="MDA Media Ltd golfscotland.net" />
<img class="sideImg" src="images/mda-graphics.gif" title="Proposed graphics - MDA Media Ltd" alt="MDA Media Ltd graphic proposals" />
</div><!-- end sidebar -->

<div id="main">
<div id="sub_main">
<h1>Website Privacy Policies and Terms &amp; Conditions</h1>
<div id="policy">
<?php
//function to display relevant policy document
//add navigation as option
function displayPolicy($policy){
	include "data/$policy.txt";
}

//check for existance of a variable
if(empty($_GET['policy'])) {
	echo '<h1>ERROR: No document found. Click <a href="index.php" title="home page">home</a> to return.</h1>';
} else {
   // retrieve details sent along with link and set as $policy variable
   $policy = $_GET['policy'];
   if(empty($policy)) {
   	echo '<h1>ERROR: No document found. Click <a href="index.php" title="home page">home</a> to return.</h1>';
	} else {
		//display policy
  		include "data/$policy.txt";
	}
}
?>
</div><!-- end #policy -->
</div><!-- end #sub_main -->

<div id="navBar">
<div id="navigation">
<?php echo create_navbar($navbarData, '|'); ?>
</div><!-- end #navigation -->
</div><!-- end navBar -->
</div><!-- end #main -->

<?php require_once('footer.php'); ?>
