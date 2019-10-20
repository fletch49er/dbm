<?php
/*
 *******************************************************************************
 * File:		404.php
 * Purpose: HTTP 404 - file not found error page
 *						
 * Author:	Mark Fletcher
 * Date:		03.05.2016
 *  
 * Notes: 
 *
 * Revision:
 *		03.05.2016	1st issue.
 *		
 *
 *******************************************************************************
*/
require_once('header.php');
?>

<div id="sidebar">
<div id="address">
<?php include 'address.php'; ?>
</div><!-- end #address -->
</div><!-- end #sidebar -->

<div id="main">
<h1><span class="error">ERROR:</span> HTTP 404 - file not found</h1>

<div id="html404">
<p>We apologise for the inconvience. There seems to be a problem accessing this web page at the moment. please check the URL you entered and try again or click <a href="http://www.designsbymark.co.uk">www.designsbymark.co.uk</a> to return to the home page
</p>
<img id="graphic404" src="images/dbm_graphic.png" title="dbm graphic" alt="dbm graphic" />
<img id="emoticon404" src="images/sad_emoticon.png" title="sad emoticon" alt="sad emoticon" />
</div><!-- end #html404 -->
</div><!-- end #main -->

<?php require_once('footer.php'); ?>

