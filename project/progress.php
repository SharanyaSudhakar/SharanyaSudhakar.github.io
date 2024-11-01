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
<div class="container"><div class="menu" align="center"><a href="../portfolio.php?menu=0" class="button">&#9679;&#9679;&#9679;Back</a> <a href="../index.html" class="button">Home</a> <a href="../portfolio.php?menu=0" class="button">Portfolio</a> <a href="../about.html" class="button">About</a> <a href="../resume.php" class="button">Resume</a></div>
  <!-- end header--><div class="content"> 
<h2>HOUDINI works in progress:</h2>

<h4>Project Specifications</h4>
	<p><b>Team Project:</b> Phillip Carpenter and Sharanya Sudhakar<br><br>
		
	Create a working pipeline for the orca splashes. The animation should be exported from Maya, simulated in Houdini, splash is exported back to Maya to be Rendered</p><br><br>
<h4>What Worked!  -- Nothing</h4>
<p>Importing animations with size and scale differences completely went over our heads. This key concept was a hard lesson learnt.<br>
	Importing and exporting back and forth as opposed to figuring out how to render in Houdini with Arnold Settings was next to impossible. <br>
	<b>Simulation Miscalculations:</b><br>
	The smilutaion worked fine but was the wrong scale for 2 months, the splashes were happening in SLO-MO and we had no idea why. Houdini simulates at real world sizes. So every orca had to be measured and sized for realworld calculations. This also ment the splashes when exported back to maya had to be resized and positioned seamlessly.<br>
	<b>Simulation Particle and Meshing:</b><br>
	The orca when simulated with the ocean tank, either did not create a big enough splash or had water shooting off to no where. We had unusual water behavior since all Houdini tutorials were for earlier versions for Houdini and not for the current working version. Simulation HDA was not an option for ocean effects.</p>
	<h4>HIP HIP HOORAY! it Worked!!</h4>
	<p>We fixed SLO-MO with realworld measurements.<br>
	Phillip took over learning Rendering in Houdini, so the splashes dont have to be imported back to Maya.<br>
	The wired splashes were fixed with Modeling for Houdini effects tutorial from Pluralsight. this tutorial explains how models can be modified to simulate better splashes in Houdini.<br>
	Water Rendering has to be done with a little bit of motion blur. So we ran tests to determine how much of a motion blur was needed.<br>
	Finally, we have a working pipeline, which still needs whitewater integration. So the testing and developing and waiting begins.</p>
	<h4>The Hardest:</h4><p>Fixing SLO-MO water simulation: the simulation itself is relatively perfect, but it is in slow motion. At this point, I redid the simulation about 20 times with warying nodes from houdini like air pressure, drag, gravity and such. The simple answer was real world measurements. <br>
	The second hardest is finetuning the splash setting, the simulation takes 2-3 hrs to calculate and any small changes can only be viewd in 2-3 hrs. the feedback is not immediate.</p>
	<h4>Conclusion:</h4>
	<p>Effects is one of the most hardest work out there, mainly because of the waiting and the number of error one can face. the time it takes to bug fix after hours of simulation time is simply brutal. I have a new found appreciation for effects.</p>
<br>
<br>
<h4>splash Tests</h4>
<div class="rowv3">
<div class="columnv3 halfcolumn"><iframe width="560" height="315" src="https://www.youtube.com/embed/Temw36fV-qQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h6><i>FIRST Water Render Test to See if Houdini can be used</i></h6></div>
<div class="columnv3 halfcolumn"><iframe width="560" height="315" src="https://www.youtube.com/embed/ZCkqclXUjJk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h6><i>Final Splash Render Test - Water in SLO-MO</i></h6></div>
</div>
	<br><br>
<div class="rowv3">
<div class="columnv3 halfcolumn"><iframe width="560" height="315" src="https://www.youtube.com/embed/JXlyx59b4Cg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h6><i>Working Orca Splash</i></h6></div>
<div class="columnv3 halfcolumn"><iframe width="560" height="315" src="https://www.youtube.com/embed/3hmxrWIRxaA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h6><i>Beach Test Render</i></h6></div>
</div>
</div>
</div>
<?php
include '../php/footer.php';
?>
</body>
</html>
