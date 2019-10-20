<?php
/*
*******************************************************************************
 * File:		dbmNotice.php
 * Purpose: Notice and link for designs by mark
 *						
 * Author:	Mark Fletcher
 * Date: 		01.01.2013
 *  
 * Notes: 
 *
 * Revision:
 *		01.01.2013		1st issue.
 *
*******************************************************************************
*/
function dbmNotice($designed, $hosted, $maintained) {
	if((strtolower($designed) == 'y')) {
		$phrase += 'designed';
	}
	if((strtolower($hosted) == 'y') and (strtolower($maintained) == 'y')) {
		$phrase += ', hosted and maintained';
	} elseif((strtolower($hosted) == 'y') {
		$phrase += ', hosted';
	{ else {
		$phrase += ', maintained';
	}
	echo 'website '.$prase.' by <a href="http://www.designsbymark.co.uk" title="www.designsbymark.co.uk">designs by mark</a>';	
}

dbmNotice('y','n','n');
?>
