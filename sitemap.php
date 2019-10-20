<?php
/*
 *******************************************************************************
 * File:		sitemap.php
 * Purpose: website sitemap page
 *						
 * Author:	Mark Fletcher
 * Date:		18.04.2018
 *  
 * Notes: 
 *
 * Revision:
 *		18.04.2018	1st issue.
 *
 *******************************************************************************
*/
//include header
require_once('header.php');
?>
<div id="sidebar">  
<div id="address">
<?php include 'address.php'; ?>
</div><!-- end #address -->
</div> <!-- end sidebar -->

<div id="main">
<div id="sub_main">
<h1>site map</h1>
<div id="sitemap">
<h2>web appplication design and development</h2>
<ul>
<?php echo create_sitemap($navbarData); ?>
</ul>
<h2>policies, disclaimers and notices</h2>
<ul>
<?php echo create_sitemap($policyData); ?>
</ul>
</div><!-- end #sitemap -->
</div><!-- end #sub_main -->

<div id="navBar">
<?php require_once('navBar.php'); ?>
</div> <!-- end #navBar -->
</div> <!-- end #main --> 

<?php require_once('footer.php'); ?>