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
<div class="container"><div class="menu" align="center"> <a href="../portfolio.php?menu=1" class="button">&#9679;&#9679;&#9679;Back</a><a href="../index.html" class="button">Home</a> <a href="../portfolio.php?menu=1" class="button">Portfolio</a> <a href="../about.html" class="button">About</a> <a href="../resume.php" class="button">Resume</a></div>
  <!-- end header--><div class="content"> 
<h2>Blight Transition</h2>
<div class="rowv3">

<div class="columnv3 leftcolmn">
<p>Create Create a transition effect from the<i> Blighted </i>to the healthy texture.</p><br><br>
<h4>Requirements</h4>
<p>The transition should be seamless and should integrate well with the rest of the game.</p>
<h4>Challenges</h4>
<p>There is no art asset or supporting idea for the transition.<br>
Try variation on blending texxtures.<br>
Should be implemented for all game assets therefore should be optimized.</p>
</div>

<div class="columnv3 rightcolum"><img src="../images/blight-web.jpg" width="300px" /></div></div>

<h4>Possible Solutions</h4>
<p><b>Slice Transition:</b> A simple slice to transition between the textures with a few effects.<br>
<b>Smoke Effect:</b>Hide the transition under a cloud of smoke. The porblem with this solution was, the smoke effect couldn&rsquo;t be made realistic with the optimization challenge.</p>
<br><br>

<div class="rowv3">
<div class="columnv3 halfcolumn"><iframe width="560" height="315" src="https://www.youtube.com/embed/j8GRHyfu0ds" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h6><i>Slice Effect Transition</i></h6></div>
<div class="columnv3 halfcolumn"><iframe width="560" height="315" src="https://www.youtube.com/embed/NvKNfKmXIB0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h6><i>Dust and Smoke Effect</i></h6></div>
</div>

<h4>Hickups!</h4>
<p>This solution also took a lot of iterations. The solution that finally worked was a skin shedding effect whose transtiion itself was created using multiple noise functions. The effect was complemented with particles to simulate a low cost skin shedding effect.</p>
<br>

<h4>Final Solution</h4><iframe width="560" height="315" src="https://www.youtube.com/embed/ULIpgQF0SVY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<?php
include '../php/footer.php';
?>
</body>
</html>
