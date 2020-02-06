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
<h2>Transforms and Parenting Objects</h2>

<h4>Project Specifications</h4>
	<p>Three Objects are created at Scene Initialization: <i>Parent, Child and Grandchild.</i><br>
	When an object is created the current selected object becomes its parent. If no objects are selected the Object has no parent and is <i>white</i> if the object is the child of the Grandchild then it is <i> black.</i><br>
	The current selected object can be transformed using the UI sliders created. Translate from current location, Rotate along object axis and Scaling.<br>
	</p><br><br>
<h4>Hip Hip Hooray- It Worked!</h4>
<p>This Ui sliders were harder to implement because they had to read in the value of the current transform. <br>
	<b>Additional Feature:</b>
	<br> A slice effect was added as an extra credit using shaders and sliders to maipulate how the objects is sliced.</p>
<br>
<br>
<h4>Final Solution</h4><iframe width="560" height="315" src="https://www.youtube.com/embed/EMs1Ex74IBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<?php
include '../php/footer.php';
?>
</body>
</html>
