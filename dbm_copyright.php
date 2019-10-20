<?php
/*
 *******************************************************************************
 * File:		dbm_copyright.php
 * Purpose:	function to create copyright notice for webpages
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
//create a copyright notice
function copyright($company, $year) {
	if ($year == date('Y')) {
		$date = $year;
	else {
		$date = $year.' - '.date('Y');
	}
	echo '&copy; '.$date.' '.$company.'. All rights reserved.';
}
?>