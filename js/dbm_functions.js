/*
 * ===================================================================
 * Function:	pricing()
 * Purpose:		Create pricing block using database data
 * Author:		Mark Fletcher
 * Date:			11.05.2018
 * 
 * Input:			
 * 	pricingObj - data drawn from PHP array $pricingObj which has been 
 *	populated with database data
 * 
 * Output:		
 * 	Writes HTML block to design.php web page
 * 
 * Notes:
 *
 * ==================================================================
 */
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
