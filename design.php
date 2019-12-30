<?php 
/*
 *******************************************************************************
 * File:		design.php
 * Purpose:	website design page
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
// include header
require_once('header.php');
?>
<div id="sidebar">  
<div id="address">
<?php include 'address.php'; ?>
</div><!-- end #address -->
<img class="sideImg" src="images/codeImage.png" title="Proposed website - Dreamhand Ltd." alt="Dreamhand Ltd. Website design proposal" />
<img class="sideImg" src="images/gimp_hornets2.png" title="Proposed Glasgow Hornets logo" alt="Glasgow Hornets logo proposal" />
</div><!-- end #sidebar -->

<div id="main">
<?php
// MySQL query string 
$sql = "SELECT id, title, content, price, description FROM dbm_services";
				
// send query to database		
if ($result = $pdo->query($sql)) :
	// iterate over result array
	while($row = $result->fetch()) :
	    if($row['id'] == 1) :
?>
<h1><?php echo $row['title']; ?></h1>
<p class="web"><?php echo nl2br($row['description']); ?></p>
<?php
	    endif;
	endwhile;
endif;
?>
    
<div id="priceBlock" class="clearfix">
<?php
// send query to database		
if ($result = $pdo->query($sql)) {
	// iterate over result array
    while($row = $result->fetch()) {
?>        
<script>
// create javaScript pricing block
document.write(pricing(<?php echo $row['id']; ?>, '<?php echo $row['content']; ?>', '<?php echo $row['price']; ?>'));
</script>
<?php
    pricing($row);
	} // end while statement
} else { 
	echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
} // end if statement
?>
</div><!-- end #priceBlock -->
</div><!-- end #main -->

<div id="navBar">
<div id="navigation">
<?php echo create_navbar($navbarData, '|'); ?>
</div><!-- end #navigation -->
</div><!-- end #navBar -->

<?php require_once('footer.php'); ?>
