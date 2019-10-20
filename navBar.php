<?php 
 /*
 *******************************************************************************
 * File:		navBar.php
 * Purpose: General navigation bar template for dbmWeb website
 *						
 * Author:	Mark Fletcher
 * Date:		15.04.2013
 *  
 * Notes: 
 *
 * Revision:
 *		15.04.2013	1st issue.
 *		15.10.2014	Case-studies page highlight tidied up
 *  	19.04.2018  new 'Home' index page created existing index page
 *     						moved to web-design.php
 *								Navbar array amended.
 *		27.11.2018	script to dispaly navbar tweaked
 *
 *******************************************************************************
*/
// load navbar array setting link name and URL
$navbar = array(
	'home' => 'index.php',
	'news' => 'news.php',
	'case-studies' => 'case-studies.php',
	'design' => 'design.php',
	'development' => 'development.php',
	'contact' => 'contact.php'
);

// alter title for index page or case-study-detail page
// for purposes of page highlight check
$pageTitle = pageName($_SERVER['PHP_SELF']);

if ($pageTitle == 'index'){
	$pageTitle = 'home';
}
if ($pageTitle == 'case-study-details'){
	$pageTitle = 'case-studies';
}

// set current page highlight
foreach ($navbar as $url => $link) {
		$pattern = '/^'.$link.'/';
	if (preg_match($pattern, $pageTitle, $matches)) {
		$navbar[$url] = '<span class="current">'.$link.'</span>';
	}
}
?>
<p id="navigation">
<?php
// dispaly navbar
$counter = 1;
foreach($navbar as $url => $link) {
    if ($counter != count($navbar)) {
			echo '<a href="'.$url.'" title="'.$url.'">'.$link.'</a> | '.PHP_EOL;
			$counter++;
    } else {
			echo '<a href="'.$url.'" title="'.$url.'">'.$link.'</a>'.PHP_EOL;
    }
}
?>
</p>

/*
 * ===================================================================
 * Function	: create_navbar()
 * Purpose	: function to create navbars
 * Author	: Mark Fletcher
 * Date		: 19.04.2019
 * 
 * Input :			
 * $navbarData	- a selected data array
 * $separator	- e.g. '|', ' ', ':'
 * 
 * Output :		
 * 	Returns $newNavbar - a fully constructed navigation bar string
 * 
 * Notes :
 *
 * ==================================================================
*/
function create_navbar($navbarData, $separator) {
	// dispaly navbar
    $counter = 1;
    $newNavbar ='';
    foreach($navbarData as $link => $url) {
        if ($counter != count($navbarData)) {
    			$newNavbar .= '<a href="'.$url.'" title="'.strtolower($link).' page">'.$link.'</a>&nbsp;&nbsp;'.$separator.'&nbsp;'.PHP_EOL;
    			$counter++;
        } else {
    			$newNavbar .= '<a href="'.$url.'" title="'.strtolower($link).' page">'.$link.'</a>'.PHP_EOL;
        }
    }
	return $newNavbar; 
}