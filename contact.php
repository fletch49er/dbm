<?php
/*
 *******************************************************************************
 * File:		contact.php
 * Purpose:	website contact page
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
<?php include "address.php"; ?>
	</div><!-- end #address -->

	<div id="myImg">
		<img id="myPhoto" src="images/fletch_photo.jpg" alt="Mark Fletcher - Cert Web Apps (Open)" />
		<p id="myTitle">
			mark fletcher<br />
			cert web apps (open)
		</p>
	</div><!-- end myImg-->
</div><!-- end #sidebar -->

<div id="main">
<div id="sub_main">
<!-- Custom javascript to implement form validation on submission -->
<script src="js/validation.js"></script>
<h1>contact us</h1>
<div id="contact">
<?php
//if form not yet submitted
if(!isset($_POST['submit'])){
?>
<p id="contact1">if you're interested in using any of the web related services on offer please do not hesitate to contact us with your enquiry. simply fill out the form below</p>

<form id="contactFrm" action="contact.php" method="post">
<div class="row">
<div class="col-15">
	<label for="nameForm">Name:</label>
</div><!-- end .col-15 -->
<div class="col-75">
	<input id="nameForm" class="valid" type="text" name="name" placeholder="full name" maxlength="50" />

</div><!-- end .col-75 -->
<div id="nameError" class="col-error"></div>
</div><!-- end .row -->

<div class="row">
<div class="col-15">
	<label for="telForm">Tel No.:</label>
</div><!-- end .col-15 -->
<div class="col-75">
	<input id="telForm" class="valid" type="text" name="tel" placeholder="telephone number" maxlength="15" />
</div><!-- end .col-75 -->
<div id="telError" class="col-error"></div>
</div><!-- end .row -->

<div class="row">
<div class="col-15">
	<label for="emailForm">Email:</label>
</div><!-- end .col-15 -->
<div class="col-75">
	<input id="emailForm" class="valid" type="text" name="email" placeholder="email address" maxlength="75" />
</div><!-- end .col-75 -->
<div id="emailError" class="col-error"></div>
</div><!-- end .row -->

<div class="row">
<div class="col-15">
<label for="domainForm">Domain:</label>
</div><!-- end .col-15 -->
<div class="col-75">
	<input id="domainForm" class="valid" type="text" name="domain" placeholder="domain name" value="none" maxlength="75" />
</div><!-- end .col-75 -->
<div id="domainError" class="col-error"></div>
</div><!-- end .row -->

<div class="row">
<div class="col-15">
	Enquiry:
</div><!-- end .col-15 -->
<div class="col-85">
	<input id="enquiry1" type="checkbox" name="service[]" value="Static Web Page Design" checked="checked" />
	<label for="enquiry1"> static web page design</label><br />
	<input id="enquiry2" class="valid" type="checkbox" name="service[]" value="Dynamic Web Page Design" />
	<label for="enquiry2"> dynamic web page design</label><br />
	<input id="enquiry3" class="valid" type="checkbox" name="service[]" value="Web Site Development" />
	<label for="enquiry3"> web site development</label><br />
	<input id="enquiry4" class="valid" type="checkbox" name="service[]" value="Web Application Design" />
	<label for="enquiry4"> web application design</label><br />
	<input id="enquiry5" class="valid" type="checkbox" name="service[]" value="E-commerce" />
	<label for="enquiry5"> e-commerce</label><br />
	<input id="enquiry6" class="valid" type="checkbox" name="service[]" value="Maintainance" />
	<label for="enquiry6"> web site maintainance</label><br />
	<input id="enquiry7" class="valid" type="checkbox" name="service[]" value="SEO" />
	<label for="enquiry7"> search engine optimization</label>
</div><!-- end .col-85 -->
</div><!-- end .row -->

<div class="row">
<div class="col-15">
	Size:
</div><!-- end .col-15 -->
<div class="col-85">
	<input id="pages1" type="radio" name="pages" value="1" />
	<label for="pages1">1 page</label>&nbsp;&nbsp;
	<input id="pages2" type="radio" name="pages" value="5" checked="checked" />
	<label for="pages2">5 pages</label>&nbsp;&nbsp;
	<input id="pages3" type="radio" name="pages" value="5&#43;" />
	<label for="pages3">5&#43; pages</label>&nbsp;&nbsp;&nbsp;(approx).
</div><!-- end .col-85 -->
</div><!-- end .row -->

<div class="row">
<div id="frmButtons">
	<input type="submit" name="submit" value="Send Enquiry" />
</div><!-- end #frmbuttons -->
</div><!-- end .row -->
</form><!-- end #contactFrm-->

<p id="contact3">
or email a more detailed enquiry to the following address <a href="mailto:mark@designsbymark.co.uk">mark@designsbymark.co.uk</a>
</p>
<?php
}else{
	//assign variables to POST submissions
	$name = trim($_POST['name']);
	$tel = trim($_POST['tel']);
	$email = trim($_POST['email']);
	$domain = trim($_POST['domain']);
	$pages = trim($_POST['pages']);

	// set $valid value
	$valid = true;

	// set regular expression patterns for form validation
	$namePattern = "/^[A-Z]{1}[a-z]*\s([A-Z]\s){0,2}(Mc|Mac|O\'){0,1}[A-Z]{1}[a-z]+$/";
	$phonePattern =  "/^((\+44\s?\(0\)\s?\d{2,4})|(\+44\s?(01|02|03|07|08)\d{2,3})|(\+44\s?(1|2|3|7|8)\d{2,3})|(\(\+44\)\s?\d{3,4})|(\(\d{5}\))|((01|02|03|07|08)\d{2,3})|(\d{5}))(\s|-|.)(((\d{3,4})(\s|-)(\d{3,4}))|((\d{6,7})))$/";
	$emailPattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/";
	$domainPattern = "/^none|^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])\.)+[a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?$/";

	//validate submitted data
	//check name
	if (!preg_match($namePattern, $name)) {
		echo <<<EOT
			<p style="color: #f00;">
			ERROR: Please provide a valid name.<br />
			(e.g. "forename surname")
			</p>
EOT;
		$valid = false;
	}

	//check tel
	if (!preg_match($phonePattern, $tel)) {
		echo <<<EOT
			<p style="color: #f00;">
			ERROR: Please provide a valid telephone number.<br />
			(e.g. "0123 123 1234" or "01234 123456")
			</p>
EOT;
		$valid = false;
	}

	//check email
	if (!preg_match($emailPattern, $email)) {
		echo <<<EOT
			<p style="color: #f00;">
			ERROR: Please provide a valid email address.<br />
			(e.g. "yourname@emailaddress.com" or "yourname@emailaddress.co.uk")
			</p>
EOT;
		$valid = false;
	}

	//check url
	if (!preg_match($domainPattern, $domain)) {
		echo <<<EOT
			<p style="color: #f00;">ERROR: Please provide a valid domain name. If none state 'none'.</p>
EOT;
		$valid = false;
	}

	//check service
	if(empty($_POST['service'])) {
		echo  <<<EOT
			<p style="color: #f00;">ERROR: Please provide at least one service of interest.</p>
EOT;
		$valid = false;
	}

	//Display error prompt
	if ($valid == false) {
		echo <<<EOT
			<h3>Please click <a href="contact.php">contact</a> and enter the correct form data.</h3>
EOT;
	}

 	//If valid then allow submit and email data
	if ($valid == true) {
		//create $service string
		$service ='';
		foreach($_POST['service'] as $serv) {
			$service = $service.$serv.", ";
		}
		//formulate and send email message
		$to = 'designsbymark@blueyonder.co.uk';
		$from = 'webmaster@designsbymark.co.uk';
		$subject = 'WEBSITE: Service Enquiry';
		$body = "Name: $name\r\nTel No.: $tel\r\nEmail: $email\r\nDomain: $domain\r\nServices:\r $service\r\nSize:\r $pages page(s)";
		//Display email success/fail prompt
		if(mail($to, $subject, $body, "From: $from")){
			echo 'Thank you for your enquiry.'.PHP_EOL;
		}else{
			echo 'ERROR: Mail delivery error!'.PHP_EOL;
		} // end if 'mail'
	} // end if $valid
} // end if '!isset'
?>
</div><!-- end #contact -->
</div><!-- end #sub_main -->

<div id="navBar">
<div id="navigation">
<?php echo create_navbar($navbarData, '|'); ?>
</div><!-- end #navigation -->
</div> <!-- end #navBar -->
</div><!-- end #main -->

<?php require_once('footer.php'); ?>
