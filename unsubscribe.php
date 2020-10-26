<?php 
/*
 *******************************************************************************
 * File:		unsubscribe.php
 * Purpose: website unsubscribe page
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
//inclide header
include 'header.php';
?>
<div id="sidebar">  
<div id="address">
<?php include 'address.php'; ?>
</div><!-- end #address -->
</div> <!-- end sidebar -->

<div id="main">
<h1>unsubscribe from newsletter</h1>

<div id="unsubscribe">
<?php 
//if form not yet submitted display form
if(!isset($_POST['unsubscribe'])):
?>
<form action="unsubscribe.php" method="post">
<p>please enter your email address</p>
<table summary="Unsubscribe form layout" cellpadding="5" cellspacing="5" border="0">
	<tr>
		<td>email address:</td>
		<td><input type="text" name="email" size="45" maxlength="75" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="unsubscribe" value="unsubscribe" /></td>
	</tr>
</table>
<input type="hidden" name="num" value=<?php echo '"'.$_GET['num'].'"'; ?> />
<input type="hidden" name="issue" value=<?php echo '"'.$_GET['issue'].'"'; ?> />
</form>
<?php 
//if form submitted process form input
else :
	//retrieve data from POST submission
	$email = $_POST['email'];
	$num = $_POST['num'];
	$issue = strtoupper($_POST['issue']);
	//set newsletter flag to '0' = 'No'
	$newsletter = 0;
	//set regular expresion pattern
	$pattern = '^[a-z0-9]+@{1}[a-z0-9]+.{1}([a-z]{2,3}.{1}[a-z]{2}|[a-z]{2,3})$';
	
	//form validation checks
	if(empty($email)):
?>
<p><span class="error">ERROR:</span> You did not enter an email address. Please provide your email address.</p>
<p><a href=\"unsubscribe.php?num=<?php echo $num; ?>&issue=<?php echo $issue; ?>">Return</a></p>
<?php elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) : ?>

<p><span class="error">ERROR:</span> Invalid email address. Please re-enter a valid email address.</p>
<p><a href="unsubscribe.php?num=<?php echo $num; ?>&issue=<?php echo $issue; ?>">Return</a></p>
<?php
	else :
    //formulate and send email message
    $to = 'designsbymark@blueyonder.co.uk';
    $from = 'mark@designsbymark.co.uk';
    $subject = 'NEWSLETTER: Unsubscribe';
    $body = "Email: $email\r\nNewsletter: {$num}\r\nIssue: {$issue}";
      
    if(mail($to, $subject, $body, "From: $from")):
?>
<h3>unsubscribe was successful!</h3>
<p>We are sorry to hear that you have decided to unsubscribe from our mailing list.</p>
<p>We wish you all the best in the near future.</p>
<div id="emoticon">
	<!--<img src="images/sad_emoticon.png" title="sad emoticon" alt="sad emoticon" /> -->
</div><!-- end #emoticon -->

<?php
		else :
?>

<p>ERROR: Mail delivery error!</p>

<?php 
		endif;
	endif;
endif;
?>
</div><!-- end unsubscribe -->

<div id="navBar">
<div id="navigation">
<?php echo create_navbar($navbarData, '|'); ?>
</div><!-- end #navigation -->
</div> <!-- end navBar -->

</div><!-- end #main -->

<?php include 'footer.php'; ?>
