<?php
/*
 *******************************************************************************
 * File 		: pageNav.php
 * Purpose	: Function to display sub page navigation
 *						
 * Author	: Mark Fletcher
 * Date		: 15.04.2015
 *  
 * Notes: 
 *
 * Revision:
 *		03.05.2016		1st issue.
 *		
 *
 *******************************************************************************
*/
//function to dispaly sub page navigation
function pageNav($next, $previous){
	if ($policy == 'privacyPolicy'){
		echo '<div id="privacy"><a href="policy.php?policy=privacyPolicy2" title="next page">next</a></div></div>';
	}
	elseif ($policy == 'privacyPolicy2'){
		echo '<div id="privacy"><a href="policy.php?policy=privacyPolicy" title="previous page">previous</a> | <a href="policy.php?policy=privacyPolicy3" title="next page">next</a></div></div>';
	}
	elseif ($policy == 'privacyPolicy3'){
		echo '<div id="privacy"><a href="policy.php?policy=privacyPolicy2" title="previous page">previous</a></div></div>';
	}
}
?>