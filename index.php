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
 *		29.10.2019	image carousel block added
 *		30.12.2019	Navbar page removed. New create_navbar() function and
 *								navigation div added
 *
 *******************************************************************************
*/
//add header template
require_once('header.php');
?>
<div id="sidebar">
  <div id="address">
<?php include "address.php"; ?>
  </div><!-- end #address -->

  <img class="sideImg" src="images/gs-pr_page.png" title="golfscotland.net website - MDA Media Ltd" alt="MDA Media Ltd golfscotland.net" />
  <img class="sideImg" src="images/mda-graphics.gif" title="Proposed graphics - MDA Media Ltd" alt="MDA Media Ltd graphic proposals" />
</div><!-- end #sidebar -->

<div id="main">
  <div id="sub_main">

    <h1>web design, web application design and development</h1>

    <div id="carousel">
      <div id="c_images">
      	<a href="images/carousel/image01.jpg" target="_blank"><img src="images/carousel/image01.jpg" alt="image1" /></a>
        <noscript>
        	<a href="images/carousel/image01.jpg" target="_blank"><img src="images/carousel/image01.jpg" alt="image1" /></a>
        </noscript>
      </div><!-- end #c_images -->
      <div id="c_controls">
      	<div id="c_icons">

        </div><!-- end #c_icons -->
        <div id="c_count">
        </div><!-- end #c_count -->
      </div><!-- end #c_controls -->
      <script>
        //create control icons
      	plus_divs(slide_index);
        //automatic rotate images
        setInterval(function(){plus_divs('+')}, 7000);
      </script>
    </div><!-- end #carousel -->
    <div id="web">
      <p><strong>designs by mark</strong> are website designers who can build affordable web related services to your specifications, which offers full control over; how your website looks; how it is accessed and utilised; and how it works within your current business plan.</p>
      <ul>
<?php echo create_serviceslist($servicesData); ?>
      </ul>
      <p>whether it is a one page static website or a fully functioning e-commerce application, <strong>designs by mark</strong> can assist you in achieving the right solution, without stretching the budget.</p>
      <p><strong>designs by mark</strong> will deliver what is required to fulfil your needs, whilst giving you a website that has been built on scalability and usability and maintainability. designed for the future, and not just the here and now. your investment will be well placed. make the right choice and <a href="contact.php">contact us</a> today to discuss how we can assist you further.</p>
    </div><!-- end #web -->
  </div><!-- end #sub_main -->

  <div id="navBar">
    <div id="navigation">
<?php echo create_navbar($navbarData, '|'); ?>
    </div><!-- end #navigation -->
  </div><!-- end #navBar -->
</div><!-- end #main -->

<?php require_once('footer.php'); ?>
