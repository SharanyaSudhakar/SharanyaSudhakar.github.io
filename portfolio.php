<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Portfolio Page- Sharanya Sudhakar</title>
<link href="css/homepage.css" rel="stylesheet" type="text/css">
<link href="css/portfolioHome.css" rel="stylesheet" type="text/css">
<script src = "js/menuanime.js?4"></script> 
	<script src="js/slideshow.js"></script> 
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 

<!-- Custom fonts from Adobe Fonts-->
<link rel="stylesheet" href="https://use.typekit.net/yvg7yal.css">
<link href="css/imagelightbox.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include 'php/mainheader.php';?>
  <!-- main container-->
   <?php include 'php/portfolio_menu.php';?>
  <!-- end header--> 
  <div class="pagecaption" id="pg">All of them contain programming of one kind or the other, except for the art tab. <br>Primary languages used <b>Cg, C#, C++ and javascript.</b>
	  <!--content that appears here is written in menuanime.js -->
	<?php echo '<script>putcontent(0);</script>';?></div>
<?php include 'php/allport.php';?>
<?php include 'php/footer.php';
	$menuitems = array('all', 'shaders','graphics','vr','game','art','lighting','progress');
	$n = (int)$_GET['menu'];
	echo '<script>selectmenu('.$n.');filterSelection(\''.$menuitems[$n].'\');putcontent('.$n.');</script>';?>
</body>
</html>
