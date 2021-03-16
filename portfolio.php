<?php
/*
 * ========================================================================
 * File:		portfolio.php
 * Purpose: page to select case study to view
 *
 * Author:	Mark Fletcher
 * Date:		25.02.2014
 *
 * Notes:
 *
 * Revision:
 *		25.02.2014	1st issue.
 *		15.10.2014	Amend link to case study details page
 *    18.04.2018  Header template header.php included
 *		30.12.2019	Navbar page removed. New create_navbar() function and
 *								navigation div added
 *		03.03.2020  file name changed form case-studies.php to portfolio.php
 *
 * ========================================================================
*/
require_once('header.php');
?>
<div id="sidebar">
	<div id="address">
<?php include 'address.php'; ?>
	</div><!-- end #address -->

	<img class="sideImg" src="images/gw-pgan_page.jpg" title="golfwales.biz - MDA Media Ltd" alt="MDA Media  Ltd golfwales.biz" />
	<img class="sideImg" src="images/gimpImage03.jpg" title="html coding - Dreamhand" alt="Dreamhand html coding" />
</div> <!-- end #sidebar -->

<div id="main">
	<div id="sub_main">
		<h1>portfolio</h1>
		<div id="web">
			<p> below is a list of previous <strong>designs by mark</strong> web design and web development projects more detail on each project can be accessed by following the links to each invividual project:</p>
			<p>
<?php
// MySQL query string
$sql = "SELECT id, client FROM caseStudies ORDER BY completionDate DESC";

// send query to database
if ($result = $pdo->query($sql)) {
	// iterate over result array
	while($row = $result->fetch()) {
  	echo '<a href="case-study-details.php?id='.$row['id'].'">'.$row['client'].'</a>&nbsp;/'.PHP_EOL;
	} //end while statement
} else {
	echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
} //end if statement
?>
			</p>
			<p>click on a project you wish to view in detail</p>
		</div><!-- end #web -->
	</div><!-- end #sub_main -->

	<div id="navBar">
		<div id="navigation">
<?php echo create_navbar($navbarData, '|'); ?>
		</div><!-- end #navigation -->
	</div><!-- end #navBar -->
</div><!-- end #main -->

<?php require_once('footer.php');
?>
