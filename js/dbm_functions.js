/*
 * ========================================================================
 * Function:	sitemap()
 * Purpose:		Dynamic site maps for footer
 *
 * Author:		Mark Fletcher
 * Date:			08.03.2015
 * 
 * Notes:
 *
 * Revision:
 *		10.03.2015	1.0 1st issue.
 *
 * ========================================================================
 */
//create policies_obj object
var policies_obj = {
	tnc: {link: 'Terms and Conditions', url: 'policy.php?policy=termsConditions', title: 'Terms and Conditions'},
	policy: {link: 'Privacy Policy', url: 'policy.php?policy=privacyPolicy', title: 'Privacy Policy'},
	disclaimer: {link: 'Disclaimer', url: 'policy.php?policy=disclaimer', title: 'Disclaimer'},
	copyright: {link: 'Copyright', url: 'policy.php?policy=copyright', title: 'Copyright'}
};

//function to construct current sitemap
function sitemap(navbar_obj) {
	var sitemap_str = "";
	var n = 0;
	//check current page and add highlight
	for(var item in navbar_obj) {
		with (navbar_obj[item]) {
			sitemap_str += '<a href="'+url+'" title="'+title+'">'+link+'</a>';
			//if not last item
			if (n < (list.length-1)) {
				sitemap_str += '<br />';
			}
		}
		n++;
	}
	return sitemap_str;
}

/*
 * ========================================================================
 * Function:	show_desc()
 * Purpose:		Dynamic link description popup
 *
 * Author:		Mark Fletcher
 * Date:			08.03.2015
 * 
 * Input:
 * 	tagclass -
 *	linkDesc -
 *
 * Output:
 * 	Returns - false
 *
 * Notes:
 *	Using DOM to create dynamic link description popup
 *
 * ========================================================================
 */
function showDesc(tagClass,linkDesc) {
  var block = document.getElementById(tagClass);
  block.innerHTML = linkDesc;
  block.style.backgroundColor = '#fff';
  block.style.opacity = "0.75";
  return false;
};

/*
 * ========================================================================
 * Function:	hide_desc()
 * Purpose:		Dynamic navigation bar
 *
 * Author:		Mark Fletcher
 * Date:			08.03.2015
 *
 * Input:
 * 	tagclass -
 *	linkDesc -
 *
 * Output:
 * 	Returns - false
 *
 * Notes:
 *	Using DOM to hide dynamic link description popup
 *
 * ========================================================================
 */
function hide_desc(tagClass,linkDesc) {
  var block = document.getElementById(tagClass);
  block.innerHTML = linkDesc;
  block.style.backgroundColor = 'transparent';
  return false;
};
