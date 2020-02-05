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

/*
 * ===================================================================
 * Script:	showPopup() & hidePopup()
 * Purpose:	function to display and hide popup navigation menu
 * Author:	Mark Fletcher
 * Date:		19.04.2019
 * 
 * Input:
 *	$num - php function create_navbar() counter value		
 * 
 * Output:		
 * 	Dynamically changes the display style
 *	show = block, hide = none
 * 
 * Notes:
 *
 * ==================================================================
*/
//showPopup function
function  showPopup() {
	document.getElementById('popUpMenu').style.display='block';
}
	
//hidePopup function
function hidePopup() {
	document.getElementById('popUpMenu').style.display='none';
}