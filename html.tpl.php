<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<!--
		This document provides the basis of a semantically structured web page 
		authored in XHTML 1.0 Transitional using established Cornell University
		naming conventions.    
	-->
    	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php print $head_title; ?></title>
<link rel="shortcut icon" href="../images/favicon.ico">
  <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png"><!--
		All layout and formatting should be controlled through Cascading Stylesheets (CSS).
		The following link tag should appear in the head of every page in the website. see
		styles/screen.css.
	-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php print $styles; ?>
  <?php print $scripts; ?>
<script src="https://embanner.univcomm.cornell.edu/OWC-emergency-banner.js"
type="text/javascript"> </script>

</head>

<body class="inactive">
	  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

</body>
</html>
