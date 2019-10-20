<?php
$pricingArr = array(
	1 => array(59, 'web site design'),
	2 => array(125, 'web site development'),
	3 => array(175, 'web site application development')
);

function pricing($pricingArr) {
	// print range of prices
	foreach($pricingArr as $key => $value) {
		echo '<div id="price'.$key.'" class="pricing">'.PHP_EOL;
		echo '<p><span class="description">'.$value[1].'</span><br />'.PHP_EOL;
		echo '<span class="price"><sup>from</sup>&pound;'.$value[0].'<sup>.00</sup></span></p>'.PHP_EOL;
		echo '</div><!-- end #price'.$key.' -->'.PHP_EOL;
	}
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="description here">
<meta name="author" content="Mark Fletcher">

<title>pricing</title>

<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->

<script>
// create pricing obj from PHP array 
var pricingObj = <?php echo JSON_encode($pricingArr); ?>;
</script>
<script>
// function to create pricing block
function pricing(pricingObj) {
	for(i in pricingObj) {
		var priceBlock = '';
   	priceBlock += '<div id="price' + i + '" class="pricing">';
   	priceBlock += '<p><span class="description">' + pricingObj[i][1] + '</span><br />';
   	priceBlock += '<span class="price"><sup>from</sup>&pound;' + pricingObj[i][0] + '<sup>.00</sup></span></p>';
   	priceBlock += '</div><!-- end #price' + i + ' -->';
   	document.write(priceBlock);
   }
}
</script>

<style type="text/css">
<!--
/* <div> overflow fix */
.clearfix:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
/* custom font faces */
@font-face {
	font-family: 'eurostile';
	src: url('../fonts/eurostile/eurosti.eot'); /* IE9 Compat Modes */
	src: url('../fonts/eurostile/eurosti.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
	     url('../fonts/eurostile/eurosti.ttf')  format('truetype');
}
#wrapper {
	margin: 0 auto;
	max-width: 960px;
	background-color: #000;
}
#priceBlock {
	margin: auto;
	max-width: 735px;
}
sup {
	vertical-align: super;
    font-size: small;
}
sup, #pricingBlock, .pricing {
	font-family: eurostile; /*, helvetica, sans-serif;*/
}
.pricing {
	display: inline-block;
	float: left;
	width: 195px;
	height: 140px;
	background-color: #06333F; /*darkblue*/
	margin: 10px;
	padding: 10px 15px;
	text-align: center;
	color: white;
}
.description {
	font-size: 24px;
}
.price {
	font-size: 48px;
}
-->
</style>
</head>

<body>
<div id="wrapper">
<header>

</header><!-- end header -->

<div id="content">
<div id="priceBlock" class="clearfix">
<script>
pricing(pricingObj);
</script>
<noscript>
<?php pricing($pricingArr); ?>
</noscript>
</div><!-- end #priceBlock -->
</div><!-- end #content -->

<footer>

</footer><!-- end footer -->

</div><!-- end #wrapper -->
</body>
</html>
