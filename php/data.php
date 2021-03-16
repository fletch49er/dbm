<?php
/*
 * ========================================================================
 * File:		data.php
 * Purpose: string variables, data arrays to populate website
 *			  	with dynamic content
 *
 * Author:	Mark Fletcher
 * Date:		30.07.2019
 *
 * Notes:
 *
 * Revision:
 *		30.07.2019	1st issue.
 *		30.12.2019	$servicesData array added
 *		13.01.2020	content of $servicesDat amended 'responsive website
 *								design' added, 'dynamic website design' amended to
 									'dynamic content design'
			20.11.2020	company detail constants created
 *
 * ========================================================================
*/
// define constants
// company details
define ('COMPANY', 'designs by mark');
define ('OWNER', 'Mark Fletcher');
define ('COMPANYNO', '');
define ('ADDRESS', '99&nbsp;Mull, St.&nbsp;Leonards, East&nbsp;Kilbride G74 2DU, Scotland');
define ('TELEPHONE','+44&nbsp;7745&nbsp;330905');
define ('WEBSITE', 'https://www.designsbymark.co.uk');
define ('PUB_YEAR', 2004);
define ('EMAIL', 'mark@designsbymark.co.uk');
define ('VATNO', '');
define ('POLICYDATE', '01/02/2012');

//services offered array
$servicesData = [
	'static website design',
	'responsive website design',
  'dynamic content design',
	'website development',
	'website maintenance',
	'web application design',
	'web application development',
	'e-commerce development',
	'search engine optimization (seo)',
	'corporate logos and graphics'
];

//navbar array setting link name and URL
$navbarData = [
	'home' => 'index.php',
	'news' => 'news.php',
	'portfolio' => 'portfolio.php',
	'design' => 'design.php',
	'development' => 'development.php',
	'contact' => 'contact.php'
];

//policies t&cs data array
$policyData = [
	'site map' => 'sitemap.php',
	'terms &amp; conditions' => 'policy.php?policy=termsConditions',
	'privacy policy' => 'policy.php?policy=privacyPolicy',
	'disclaimer' => 'policy.php?policy=disclaimer',
	'copyright' => 'policy.php?policy=copyright'
];

//social media data array
$socialMedia = [
	'Twitter' => ['fa fa-twitter', 'https://www.twitter.com/dbm_web'],
	'Facebook' => ['fa fa-facebook', 'https://www.facebook.com/designsbymark'],
	'LinkedIn' => ['fa fa-linkedin', 'https://uk.linkedin.com/in/fletch49er']
];
?>
