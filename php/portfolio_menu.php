<?php

echo ' <div class="menu" align="center"> <a href="index.html" class="button">Home</a> <a href="portfolio.php" class="button">Portfolio</a> <a href="about.html" class="button">About</a> <a href="resume.php" class="button">Resume</a>
    <div class="dropdown-content" id="myBtnContainer">
      <button class="btn select" onclick="filterSelection(\'all\');selectmenu(0); putcontent(0);">ALL</button>
      <button class="btn" onclick="filterSelection(\'shaders\');selectmenu(1); putcontent(1);">Shaders</button>
      <button class="btn" onclick="filterSelection(\'graphics\');selectmenu(2); putcontent(2); ">Graphics</button>
      <button class="btn" onclick="filterSelection(\'vr\');selectmenu(3); putcontent(3);">VR-Oculus</button>
     <button class="btn" onclick="filterSelection(\'game\');selectmenu(4); putcontent(4);">Game Engine</button>
      <button class="btn" onclick="filterSelection(\'art\');selectmenu(5); putcontent(5);">Art</button>
		<button class="btn" onclick="filterSelection(\'lighting\');selectmenu(6); putcontent(6);">Lighting</button>
     <button class="btn" onclick="window.location=\'perproject/progress.php\';">Houdini</button> </div>
  </div>';
?>

