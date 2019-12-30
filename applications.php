<?php
/*
 *******************************************************************************
 * File:		application.php
 * Purpose: Website application page
 *						
 * Author:	Mark Fletcher
 * Date:		03.05.2016
 *  
 * Notes: 
 *
 * Revision:
 *		03.05.2016	1st issue.
 *		30.12.2019	Navbar page removed. New create_navbar() function and 
 *								navigation div added
 *		
 *
 *******************************************************************************
*/

include 'header.php';
?>

<div id="sidebar">  
<div id="address">
<?php include 'address.php'; ?>
</div><!-- end #address -->
</div><!-- end #sidebar -->

<div id="main">
<h1>web application design</h1>
<p>Just as with a traditional desktop application, web applications have varying levels of risk. A personal home page is much less risky than, for example, a stock trading web site. For some projects security, software bugs, etc. are major issues. If time to market, or technical complexity is a concern, documentation, test planning, change control, requirements analysis, architectural description and formal design and construction practices can mitigate risk.</p>

<h3>Technologies</h3>
<p>Ajax <span class="slash">/</span> ASP <span class="slash">/</span> CSS <span class="slash">/</span> ColdFusion <span class="slash">/</span> JavaScript <span class="slash">/</span> Perl <span class="slash">/</span> PHP <span class="slash">/</span> CGI</p>

<h3>Lifecycle Model</h3>
<p>Time to market, company-growth and requirements churn, three things that are emphasized in web-based business, coincide with the principles of the Agile practices. Some agile lifecycle models are:</p>
<p>Extreme programming <span class="slash">/</span> Scrum <span class="slash">/</span> Timebox development <span class="slash">/</span> Feature-driven development</p>

<h3>Testing</h3>
<p>Web applications undergo the same unit, integration and system testing as traditional desktop applications. But because web application clients vary so greatly, teams might perform some additional testing, such as:</p>

<p>Security <span class="slash">/</span> Performance, Load, and Stress <span class="slash">/</span> HTML/CSS validation <span class="slash">/</span> Accessibility <span class="slash">/</span> Usability <span class="slash">/</span> Cross-browser
</div><!-- end #main-->

<div id="navBar">
<div id="navigation">
<?php echo create_navbar($navbarData, '|'); ?>
</div><!-- end #navigation -->
</div><!-- end #navBar -->

<?php include 'footer.php'; ?>