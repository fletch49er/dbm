<?php
/*
 *******************************************************************************
 * File:		footer.php
 * Purpose:	General footer template for dbm website
 *
 * Author:	Mark Fletcher
 * Date:		28.09.2011
 *
 * Notes:
 *
 * Revision:
 *		31.01.2012	1st issue.
 *		03.10.2012	Underscores removed from 'ID' names.
 *		19.11.2012	php script added to create dynamic copyright year
 *		22.11.2018	dbmNotice <div> moved to dbmNotice.php
 *		30.12.2019	ftrNavbar HTML removed. New create_navbar() function and
 *								ftrNavigation div added
 *
 *******************************************************************************
*/
?>
</div><!-- end #content -->

<footer class="clearfix">
  <div id="ftrNavBar">
    <div id="ftrNavigation">
<?php echo create_navbar($policyData, '|'); ?>
    </div><!-- end #ftrNavigation -->
    <div id="copyright">
<?php copyright(OWNER, PUB_YEAR); ?>
    </div><!-- end #copyright -->
  </div><!-- end #ftrNavBar -->

  <div id ="ftrButtons">
<?php ftrButtons($socialMedia, '#000', '#664C06'); ?>
  </div><!-- end #ftrButtons -->
</footer><!-- end footer -->

<?php include 'dbmNotice.php'; ?>

</div><!-- end #wrapper -->

</body>
</html>
<?php
// close db connection
unset($pdo);
?>
