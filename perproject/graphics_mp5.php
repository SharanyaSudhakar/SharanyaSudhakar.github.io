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
<h2>Texture Mapping and Modeling</h2>

<h4>Project Specifications</h4>
	<p><b>Team Project:</b> Naomi Fiebelkorn and Sharanya Sudhakar<br><br>
	Texture Mapping : UVs implementation by Naomi Fiebelkorn<br>
	Mesh creation and Manipulation: 
	<br>
	Mesh can be manipluated by the handles on the white vertex points. The mesh is generated using Vertexes, normals and triangles. When the edge vertex is manipulated the other vertexes in the same row will mimic the effect.<br>
	The mesh resolution can be changed to create a smooth mesh cylinder.<br> When the white vertex is selected the handles appear. The handles move intuitively like any translate option. </p><br><br>
<h4>Hip Hip Hooray- It Worked!</h4>
<p>Understanding how vertices, normals and triangles work took time. Figuring the math to make the other vetices follor the leader was tricky. The extrusion of the mesh is an added extra credit thing. Making the vertex handles work for the vertex needed quite a bit of debugging, because the screen mesurements had to converted to world coordinates to make the translation.</p>
<br>
<br>
<h4>Final Solution</h4><iframe width="560" height="315" src="https://www.youtube.com/embed/akm-PoThoTM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<?php
include '../php/footer.php';
?>
</body>
</html>
