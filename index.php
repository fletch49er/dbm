<?php 
/*
 *******************************************************************************
 * File:		index.php
 * Purpose:	website main page page
 *						
 * Author:	Mark Fletcher
 * Date:		18.04.2013
 *  
 * Notes:
 *
 * Revision:
 *		18.04.2013	1st issue.
 *		03.05.2016	address data moved to external file
 *		18.04.2018  header and footer data moved to external files	
 *
 *******************************************************************************
*/

require_once('header.php'); 
?>
<div id="sidebar">
<div id="address">
<?php include "address.php"; ?>
</div><!-- end #address -->
<img class="sideImg" src="images/homepage01.jpg" title="Proposed website - Dreamhand Ltd." alt="Dreamhand Ltd. Website design proposal" />
<img class="sideImg" src="images/logo_proposals.gif" title="Proposed dreamhand logo - Dreamhand Ltd." alt="Dreamhand Ltd. Logo proposal" />
</div><!-- end #sidebar -->

<div id="main">
<div id="sub_main">
<h1>web design, web application design and development</h1>

<div id="image1">
<img class="imgBrdr" src="images/concept.png" width="395" height="300" title="Concept Art - Daisy Duck Designs" alt="Daisy Duck Designs Concept Art" />
</div><!-- end #image1 -->
<p class="web"><strong>designs by mark</strong> are website designers who can build affordable web related services to your specifications, which offers full control over; how your website looks; how it is accessed and utilised; and how it works within your current business plan.</p>
<ul class="web">
<li>static website design</li>
<li>dynamic website design</li>
<li>website development</li>
<li>website maintenance</li>
<li>web application design</li>
<li>web application development</li>
<li>e-commerce development</li>
<li>search engine optimization (seo)</li>
<li>corporate logos and graphics</li>
</ul>
<p class="web">whether it is a one page static website or a fully functioning e-commerce application, <strong>designs by mark</strong> can assist you in achieving the right solution, without stretching the budget.</p>
<p class="web"><strong>designs by mark</strong> will deliver what is required to fulfil your needs, whilst giving you a website that has been built on scalability and usability and maintainability. designed for the future, and not just the here and now. your investment will be well placed. make the right choice and <a href="contact.php">contact us</a> today to discuss how we can assist you further.</p>
</div><!-- end #sub_main -->

<div id="navBar">
<?php require_once("navBar.php"); ?>
</div> <!-- end #navBar -->
</div><!-- end #main -->

<?php require_once('footer.php'); ?>
