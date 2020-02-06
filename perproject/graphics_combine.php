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
<h2>Mesh Combine Project: </h2>

<h4>Project Specifications</h4>
	<p>Three primitives with their very own textures have to be combined as one single mesh. The textures and their respective transforms have to be retained.</p><br><br>
<h4>Hip Hip Hooray- It Worked!</h4>
<p>I used texture arrays for the implemeting the shader and then mapping the respective textures to the meshes. This was done via uv2. uv2 value was used as an index to the texture and the corresponding texture is later mapped.
	<br>
	To combine the meshes, each of their vertexes, normals triangles were stacked on a list and the mesh produced with this information. <br>
	To transform the mesh, a point transform was used on the vertex retrieved from the meshes. this enabled the vertixes to be in their new positions when added to the list from whence the combined mesh is generated.</p>
	<h4>Extra:</h4>
	<p>A GUI was added to generate more objects to be combined and TRS the created objects. Later these can be combine with the button.</p>
<br>
<br>
<h4>Final Solution</h4><iframe width="560" height="315" src="https://www.youtube.com/embed/bp_xZ_ddjKU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<?php
include '../php/footer.php';
?>
</body>
</html>
