<?php
/*
 * ========================================================================
 * File:		casestudydetails.php
 * Purpose:	to view case study details
 *						
 * Author:	Mark Fletcher
 * Date:		19.02.2014
 *  
 * Notes: 
 *
 * Revision:
 *		24.02.2014	1st issue.
 *    18.04.2018  Header template header.php included
 *		30.12.2019	Navbar page removed. New create_navbar() function and 
 *								navigation div added
 *
 * ========================================================================
 */
require_once('header.php'); 
?>
<div id="sidebar">
<div id="address">
<?php include "address.php"; ?>
</div><!-- end #address -->
</div> <!-- end #sidebar -->

<div id="main">
<div id="sub_main">
<h1>case study</h1>
<?php
// MySQL query string 
$sql = "SELECT id, projectTitle, client, budget, completionDate, brief, description, url, folder, image1, image2, image3 FROM caseStudies WHERE id=".$_GET['id'];
				
// send query to database		
if ($result = $pdo->query($sql)) {
	// iterate over result array
	while($row = $result->fetch()) {	
?>
<div id="csTable">
<table class="caseStudy">
<tr>
    <td class="caseStudy">client:</td>
    <td class="caseStudy"><?php echo $row['client']; ?></td>
</tr>
<tr>
    <td class="caseStudy">brief:</td>
    <td class="caseStudy"><?php echo $row['brief']; ?></td>
</tr>
<tr>
    <td class="caseStudy">budget:</td>
    <td class="caseStudy"><?php echo budgetZero($row['budget']); ?></td>
</tr>
<tr>
    <td class="caseStudy">url:</td>
    <td class="caseStudy">
        <a href="<?php echo $row['url']; ?>"><?php echo $row['url']; ?></a>
    </td>
</tr>
<tr>
    <td class="caseStudy">completion date:</td>
    <td class="caseStudy"><?php echo convertDate($row['completionDate']); ?></td>
</tr>
<tr>
    <td class="caseStudy" colspan="2">description:</td>
</tr>
<tr>
    <td class="caseStudy" colspan="2"><?php echo $row['description']; ?></td>
</tr>
</table>
</div><!-- end #csTable -->

<div id="imgPanel">
<?php
for($x=1; $x<=3; $x++) : 
	if($row['image'.$x.''] != NULL) :
?>
<div class="image">
<a href="casestudies/<?php echo $row['folder'].'/'.$row['image'.$x.'']; ?>">
<img class="caseStudy" src="casestudies/<?php echo $row['folder'].'/'.$row['image'.$x.'']; ?>" alt="<?php echo $row['url']; ?>" />
</a>
</div><!-- end .image -->
<?php
	endif;
endfor; 
?>
</div><!-- end #imgPanel -->
<?php
	} //end while statement
} else { 
	echo "ERROR: Could not execute $sql. " . print_r($pdo->errorInfo());
} //end if statement
?>
</div><!-- end #sub_main -->
<div id="navBar">
<div id="navigation">
<?php echo create_navbar($navbarData, '|'); ?>
</div><!-- end #navigation -->
</div><!-- end #navBar -->
</div><!-- end #main -->

<?php require_once('footer.php'); ?>
