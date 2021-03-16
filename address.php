<?php
/*
	*******************************************************************************
 * File:		address.php
 * Purpose:	Company address template
 *
 * Author:	Mark Fletcher
 * Date:		03.05.2016
 *
 * Notes:
 *
 * Revision:
 *		03.05.2016	1st issue.
 *		23.11.2018	<address> and <a mailto: > tags added
 *    15.03.2021  Block address function added, constants added
 8                (see data.php file)
 *
 *******************************************************************************
*/
?>
<address>
  <?php block_address(ADDRESS); ?>
</address>
<br />
t: <a href="mailto:<?php echo TELEPHONE; ?>"><?php echo TELEPHONE; ?></a><br />
<br />
e: <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a><br />
