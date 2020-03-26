<?php
/*
 * ========================================================================
 * File:		case-studies.php
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
 *
 * ========================================================================
*/
require_once('header.php'); 
?>
<div id="sidebar">  
<div id="address">
<?php include 'address.php'; ?>
</div><!-- end #address -->
</div> <!-- end #sidebar -->

<div id="main">
<div id="sub_main">
<h1>case studies</h1>
<p class="web">a veriety of case studies on web design and web development projects carried out by <strong>designs by mark</strong> can be accessed below:</p>
<p class="web">
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
<p class="web">click on a project you wish to view in detail</p>
</div><!-- end #sub_main -->

<div id="navBar">
<div id="navigation">
<?php echo create_navbar($navbarData, '|'); ?>
</div><!-- end #navigation -->
</div><!-- end #navBar -->
</div><!-- end #main -->



<?php require_once('footer.php');
?>
