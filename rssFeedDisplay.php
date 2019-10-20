<!--
<?php
//include login constants
include 'db-login.php';

/**
 * Dynamic display RSS feed function 
 *
 * Will display RSS feed as listed in database
 *	table 'newsfeeds' placed within content layout 
 *
 * Set to display 5 articles per feed limit=5
 * @since Mount Cameron 1.0
 */
$display_feed = function($feedURL) {
	$rss = new DOMDocument();
 	$rss->load(realpath($feedURL));
 	$feed = array();
 	foreach ($rss->getElementsByTagName('item') as $node) {
 		$item = array ( 
    		'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    		'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    		'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    		'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    	);
    	array_push($feed, $item);
    }
   $limit = 5;
    for($x=0;$x<$limit;$x++) {
    	$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    	$link = $feed[$x]['link'];
    	$description = $feed[$x]['desc'];
    	$date = date('l F d, Y', strtotime($feed[$x]['date']));
    	echo '<strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />'.PHP_EOL;
    	echo '- <small><em>Posted on '.$date.'</em></small><br />'.PHP_EOL;
    }
}

//connect to database
try {
  $pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.'', DB_USER, DB_PWD);
} catch (PDOException $e) {
  die("ERROR!: Could not connect: ".$e->getMessage());
}
echo "Connected";

//query to newsfeeds table
$sql = "SELECT `newsfeed_id`, `newsfeed_title`, `newsfeed_link` FROM `newsfeeds` WHERE `newsfeed_id` < `4`";
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />

<title>RSS Feed Display Test</title>
<meta name="description" content="RSS Feed Display Test" />
<meta name="author" content="fletch" />

<!--<link rel="stylesheet" href="css/styles.css">-->

</head>
<body>
<section id="cc_rss">
	<h3 class="cc_green">News Feeds</h3>
	<div id="newsfeeds">

	</div><!-- end #newsfeeds -->
</section><!-- end #cc_rss -->
</body>
</html>
<?php
//close connection
$pdo = null;
?>