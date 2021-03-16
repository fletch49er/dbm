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
<img class="sideImg" src="images/gs-pr_page.png" title="golfscotland.net website - MDA Media Ltd" alt="MDA Media Ltd golfscotland.net" />
<img class="sideImg" src="images/mda-graphics.gif" title="Proposed graphics - MDA Media Ltd" alt="MDA Media Ltd graphic proposals" />
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
<div id="navigation">
<?php echo create_navbar($navbarData, '|'); ?>
</div><!-- end #navigation -->
</div> <!-- end #navBar -->
</div> <!-- end #main -->

<?php require_once('footer.php'); ?>
