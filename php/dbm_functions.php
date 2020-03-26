<?php
/*
 * ===================================================================
 * Function:	metaFill()
 * Purpose:		Function to dymamically fill in page related meta data
 * Author:		Mark Fletcher
 * Date:			27.11.2018
 * 
 * Input:			
 * 	$_SERVER['PHP_SELF'] - current page URL
 * 
 * Output:		
 * 	pageName
 * 
 * Notes:
 *
 * ==================================================================
 */
function metaFill($filter) {
	global $pdo;
	// use pageName() function to set $pageName
	$pageName = pageName($_SERVER['PHP_SELF']);
	
	// MySQL query string 
	$sql = "SELECT id, title, pageName, description FROM dbm_metatext WHERE pageName = '".$pageName."'";
				
	// send query to database		
	if ($result = $pdo->query($sql)) :
		// iterate over result array
		while($row = $result->fetch()) :
			$text = $row[$filter];
		endwhile;
	endif;
	return $text;
}

/*
 * ===================================================================
 * Function:	create_sitemap()
 * Purpose:		function to sitmap list
 * Author:		Mark Fletcher
 * Date:			06.08.2019
 * 
 * Input:			
 * $data	- a selected data array
 * 
 * Output:		
 * 	Returns $list - a fully constructed HTML list
 * 
 * Notes:
 *
 * ==================================================================
*/
function create_serviceslist($data) {
	$services ='';
	foreach($data as $service) { 	
  	$services .= '<li>'.$service.'</li>'.PHP_EOL;
	}
  return $services;
}

/*
 * ===================================================================
 * Function:	create_navbar()
 * Purpose:		function to create navbars
 * Author:		Mark Fletcher
 * Date:			19.04.2019
 * 
 * Input:			
 * $navbarData	- a selected data array
 * $separator	- e.g. '|', ' ', ':'
 * 
 * Output:		
 * 	Returns $newNavbar - a fully constructed navigation bar string
 *											 with current page highlighting
 * 
 * Notes:
 *
 * ==================================================================
*/
function create_navbar($navbarData, $separator) {
  //alter title for index page or case-study-detail page
  //for purposes of page highlight check
  $pageTitle = pageName($_SERVER['PHP_SELF']);
 //alter index to home
  if ($pageTitle == 'index'){
  	$pageTitle = 'home';
  }
  //alter case-study-details to case-studies
  if ($pageTitle == 'case-study-details'){
  	$pageTitle = 'case-studies';
  }
  //dispaly navbar
  $counter = 1;
  $separator = '&nbsp;'.$separator;
  $newNavbar = '';
  foreach($navbarData as $link => $url) {
  	//set current page highlight
  	$pattern = '/^'.$link.'/';
    if (preg_match($pattern, $pageTitle, $matches)) {
    	//link highlighted
    	$navLink = '<span class="current">'.$link.'</span>';
    } else {
    	//link not highlighted
    	$navLink = $link;
    }
    //build navbar string
    if ($counter != count($navbarData)) {
    	$newNavbar .= '<a href="'.$url.'" title="link to '.strtolower($link).' page">'.$navLink.'</a>'.$separator.PHP_EOL;
  		$counter++;
    } else {
    	//last navbar link
  		$newNavbar .= '<a href="'.$url.'" title="link to '.strtolower($link).' page">'.$navLink.'</a>'.PHP_EOL;
    }
  }
  return $newNavbar; 
}

/*
 * ===================================================================
 * Function:	create_sitemap()
 * Purpose:		function to sitmap list
 * Author:		Mark Fletcher
 * Date:			06.08.2019
 * 
 * Input:			
 * $data	- a selected data array
 * 
 * Output:		
 * 	Returns $list - a fully constructed HTML list
 * 
 * Notes:
 *
 * ==================================================================
*/
function create_sitemap($data) {
	$sitemap ='';
	foreach($data as $page => $url) { 	
  	$sitemap .= '<li><a href="'.$url.'" title="open '.$page.' page">'.$page.' page</a></li>'.PHP_EOL;
	}
  return $sitemap;
}

/*
 * ===================================================================
 * Function:	pageName()
 * Purpose:		Function to obtain page name from url
 * Author:		Mark Fletcher
 * Date:			27.11.2018
 *
 * Input:
 * 	$_SERVER['PHP_SELF'] - current page URL
 *
 * Output:
 * 	pageName
 * 
 * Notes:
 *
 * ==================================================================
 */
function pageName($page) {
	$check = preg_split('/[\/]|[.]/', $page);
	$pageName = $check[(count($check)-2)];
	return $pageName;
}

/*
 * ===================================================================
 * Function:	dateStamp()
 * Purpose:		Create dynamic date stamp dependant on set date
 * Author:		Mark Fletcher
 * Date:			12.11.2015
 *
 * Input:
 * 	$date - date string = 'year'
 *
 * Output:
 * 	Returns $date_stamp - date string in format, 'year' or  'year - year'
 *
 * Notes:
 *
 * ==================================================================
 */
function dateStamp($date) {
	$firstDate = $date;
	$lastDate = date('Y');
	$dateStamp = '';
	if($lastDate == $firstDate) {
		$copyright = $lastDate;
	} else {
		$copyright = $firstDate.' - '.$lastDate;
	}
	$dateStamp = $copyright;
	return $dateStamp;
}

/*
 * ===================================================================
 * Function:	pricing()
 * Purpose:		Create dynamic pricing from dbmServices database table
 * Author:		Mark Fletcher
 * Date:			15.05.2018
 *
 * Input:
 * 	$pricingArr - database data from dbmServices table
 * 
 * Output:
 * 	Returns pricing blocks
 * 
 * Notes:
 *
 * ==================================================================
 */
function pricing($pricingArr) {
	// print range of prices
  $pricingBlock = '';
	$pricingBlock .= '<p>';
  $pricingBlock .= '<span class="description">'.$pricingArr['content'].'</span><br />'.PHP_EOL;
	$pricingBlock .= '<span class="price"><sup>from</sup>&pound;'.$pricingArr['price'].'<sup>.00</sup></span>';
	$pricingBlock .= '</p>'.PHP_EOL;
  return $pricingBlock;
}

/*
 * ===================================================================
 * Function:	budgetZero()
 * Purpose:		Check budget value and display 'N/A' if value is zero
 * Author:		Mark Fletcher
 * Date:			15.05.2018
 * 
 * Input:			
 * 	$value - 'budget' data from caseStudies table 
 * 
 * Output:		
 * 	$budget
 * 
 * Notes:
 *
 * ==================================================================
 */
function budgetZero($value) {
	if($value == 0.00) {
		$budget = 'N/A';
	} else {
		$budget = '&pound;'.$value;
	}
	return $budget;
}

/*
 * ===================================================================
 * Function:	convertDate()
 * Purpose:		Convert date to 'dd-mm-yyyyy' format
 * Author:		Mark Fletcher
 * Date:			15.05.2018
 * 
 * Input:			
 * 	$dbDate - 'date' data from caseStudies table 
 * 
 * Output:		
 * 	$newDate
 * 
 * Notes:
 *
 * ==================================================================
 */
function convertDate($dbDate) {
    $dateArray = explode('-', $dbDate);
    $newDate = $dateArray[2].'-'.$dateArray[1].'-'.$dateArray[0];
    return $newDate;
}

/*
 * ===================================================================
 * Function:	ftrButtons()
 * Purpose:		Convert date to 'dd-mm-yyyyy' format
 * Author:		Mark Fletcher
 * Date:			15.05.2018
 * 
 * Input:			
 * 	$dbDate - 'date' data from caseStudies table 
 * 
 * Output:		
 * 	$newDate
 * 
 * Notes:
 *
 * ==================================================================
 */
function ftrButtons($media, $main_color, $inv_color) {
	foreach($media as $social => $data) {
		echo '<div class="ftrBox"><!-- '.$social.' button -->'.PHP_EOL;
    echo '<a href="'.$data[1].'"><span class="fa-stack fa-lg">'.PHP_EOL;
    echo '<i class="fa fa-circle fa-stack-2x" style="color: '.$main_color.';"></i>'.PHP_EOL;
    echo '<i class="'.$data[0].' fa-stack-1x fa-inverse" title="Follow Us on '.$social.'" style="color: '.$inv_color.';"></i>'.PHP_EOL;
    echo '</span></a>'.PHP_EOL;
   	echo '</div><!-- end .ftrBox -->'.PHP_EOL;
	}
}
?>
