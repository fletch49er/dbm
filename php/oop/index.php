
<?php include("class_lib.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="description" content="<!-- description here -->" />
<meta name="location" content="<!-- location here -->" />
<meta name="author" content="Mark Fletcher">
<meta name="copyright" content="<!-- copyright content here -->" />
<meta name="keywords" content="<!-- keywords here -->r" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<title>title here</title>

<!-- include style sheet -->
<link rel="stylesheet" href="css/styles.css?v=1.0">

<!-- include javascript fjunctions -->
<script src="js/scripts.js"></script>
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
<![endif]-->
</head>

<body>

<div id="wrapper" class="clearfix">
<header>

</header><!-- end header> -->

<div id="navbar">

</div><!-- end #navbar -->

<div id="content" class="clearfix">
<?php
$mark = new person("Mark Fletcher");

echo 'My name is: '.$mark->get_forename().' '.$mark->get_surname();
?>
</div><!-- end #content -->

<footer>

</footer><!-- end footer -->
</div><!-- end #wrapper -->
</body>
</html>
