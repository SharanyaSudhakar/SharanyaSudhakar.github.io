<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Portfolio Page- Sharanya Sudhakar</title>
<link href="../css/homepage.css" rel="stylesheet" type="text/css">
<link href="../css/portfolioHome.css" rel="stylesheet" type="text/css">
<link href="../css/project.css" rel="stylesheet" type="text/css">
<script src = "../js/menuanime.js?6"></script> 
<script src="../js/slideshow.js"></script> 
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 

<!-- Custom fonts from Adobe Fonts-->
<link rel="stylesheet" href="https://use.typekit.net/yvg7yal.css">
<link href="../css/imagelightbox.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include '../php/mainheader.php';?>
<!-- main container-->
<div class="container"><div class="menu" align="center"><a href="../portfolio.php?menu=2" class="button">&#9679;&#9679;&#9679;Back</a> <a href="../index.html" class="button">Home</a> <a href="../portfolio.php?menu=2" class="button">Portfolio</a> <a href="../about.html" class="button">About</a> <a href="../resume.php" class="button">Resume</a></div>
  <!-- end header--><div class="content"> 
<h2>Graphics and Shader Graph Intro Project</h2>

<h4>Project Specifications</h4>
	<p>
Create Primitives at the target location.<br>
	Target (black sphere) can be moved around the floor with a simple click.
	<br>
	Primitive to be created from drop down menu.
	<br> The primitives move back and forth on a predefined value, they alternate textures between white and another color when coming back to the original position.
	<br> Shader Graph Intro, create a simple shader to be implemented for the alternate color texture for the primitives.
</p><br><br>
<h4>Hip Hip Hooray- It Worked!</h4>
<p>Tranform for the cube was quite hard, because of the implementation of Quaternions. Also animating the objects back and forth was quite tricky for a beginner to Unity. The simplest solution is to add this animation script as a seperate component for each primitve.</p>
<br>
<br>
<h4>Final Solution</h4><iframe width="560" height="315" src="https://www.youtube.com/embed/oeVDKDuKot8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<?php
include '../php/footer.php';
?>
</body>
</html>
