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
<div class="container"><div class="menu" align="center"><a href="../portfolio.php?menu=3" class="button">&#9679;&#9679;&#9679;Back</a> <a href="../index.html" class="button">Home</a> <a href="../portfolio.php?menu=3" class="button">Portfolio</a> <a href="../about.html" class="button">About</a> <a href="../resume.php" class="button">Resume</a></div>
  <!-- end header--><div class="content"> 
<h2>VR Project Experiment: Whale Fins </h2>

<h4>Project Specifications</h4>
	<p>Use the Animation Rigging Package in Unity 2019 to incorporate Whale fins to have floow through when flapping and FK movement when eating or grabing</p>
	<h4>Challenges:</h4>
	<p>The Rigging was harder than imagined. The bones for the fins movement didnt require as many as where in maya. <br>
	Because the mesh was so small, the follow through was all over the place and couldnt be tamed.<br>
	The FK setup works but with fewer bones.</p><br><br>
<h4>Hip Hip Hooray- It Worked!</h4>
<p>The Rigging was by far the hardest. Becasue there is no mirroring, the fins had to be sperately place and rigged. This was harder than I imagined because small bugs were so predominant in VR and with the fins to close to the user, there wasn't even distance to conceal the small errors. With tons of testing and feedback, we incormporated the FK fin for the Granny experiance ans the follow through or damp trnasform effect for the free swim.</p>
<br>
<br>
<h4>Final Solution</h4><iframe width="560" height="315" src="https://www.youtube.com/embed/-vZ9PiR3IVs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<?php
include '../php/footer.php';
?>
</body>
</html>
