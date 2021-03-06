<?php
/*
 *******************************************************************************
 * File:		news.php
 * Purpose: website news page
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
require_once("header.php");
?>

<div id="sidebar" class="clearfix">
	<div id="address">
<?php include "address.php"; ?>
	</div><!-- end #address -->

	<div id="twtrWidget">
		<a class="twitter-timeline" data-lang="en" data-width="100%" data-height="100%" data-theme="dark" href="https://twitter.com/dbm_web?ref_src=twsrc%5Etfw">Tweets by dbm_web</a>
		<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div> <!-- end #twtrWidget -->
</div> <!-- end #sidebar -->

<div id="main">
	<div id="sub_main">
		<h1>news</h1>
		<div id="web">
<?php
// create and execute SELECT query
$sql = "SELECT id, title, article, date FROM dbmNews WHERE archive = '0' ORDER BY date DESC";
if ($result = $pdo->query($sql)) {
	while($row = $result->fetch()) {
		//format date
		$d = explode('-', $row[3]);
		$date = date('d/m/Y', mktime(0, 0, 0, $d[1], $d[2], $d[0]));
		//print article summaries
		echo '<h2>'.$row[1].' - '.$date.'</h2>'.PHP_EOL;
		echo '<p>'.$row[2].'</p>'.PHP_EOL;
	}
} else {
	echo 'ERROR: Could not execute '.$sql.' '. print_r($pdo->errorInfo());
}
?>
</div><!-- end #web -->
	</div><!-- end #sub_main -->

	<div id="navBar">
		<div id="navigation">
<?php echo create_navbar($navbarData, '|'); ?>
		</div><!-- end #navigation -->
	</div> <!-- end #navBar -->

</div> <!-- end #main-->

<?php require_once("footer.php"); ?>
