filterSelection("all")
// Execute the function and show all columns

function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
function selectmenu(i)
{
	var btns = document.getElementsByClassName("btn");
    var current = document.getElementsByClassName("select");
    current[0].className = current[0].className.replace(" select", "");
    btns[i].className += " select";
}

function putcontent(i)
{
	var content = new Array(8);
	content[0]= "All of them contain programming of one kind or the other, except for the art tab. <br>Primary languages used <b>Cg, C#, C++ and javascript.</b>";
	content[1] = "Shaders are written for Unity and created using the shader-graph for Unity 2018 & above versions and coded as Surface Shaders using <i>Cg</i> for older versions.";

	content[2] = "";

	content[3] = "";

	content[4] = "";
	content[5] = "Shaders are written for Unity and created using the shader-graph for Unity 2018 & above versions and coded as Surface Shaders using <i>Cg</i> for older versions.<br><br><hr><br>Graphics<br><ol><li>Texture Mapping and modelling</li><li>Combine into One Mesh</li><li>Vectors and Normals with Shadow projection</li><li>Parenting and Translation</li></ol><br>Graphics Codex - Projects<br><i>Projects from Morgan Mcguire's Graphics Codex</i><br><ol><li>Cubes: Transformations</li></ol>";

	content[6] = "Sample Lighting projects using Maya and Arnold projecting different moods:<br>These are samples of school projects where the textures and models were provided.<br> <br><ol><li>Room lit with a Single Light Source<br>The lamp is the main source of light. An area light was used to light the room in an even intensity. Other knooks and cranies where light with a soft light to illuminate them just enought to see the objects and retain information.</li><br><li>Happy and Jubilant Mood<br>To portray joy or happiness in muted tones. The light is kept even so as not to be too bright and overwhelming. Primary <b>source</b> of light is through the window.Area lights are used to evenly light the space. Specific spot light are uses as fill lights and to bring objects into focus, the <b>photos</b> is particular are well lit to add a focus. </li><br><li>Sad or Melencholy Mood<br>Light course is from outside the window assuming a street lamp. The light source is essential to light the photograph on the table. The gobo effect is used to create the water droplets akin to tears as an effect to bring about the mood. Finally there is a misty qaulity to the room also from the light source to add a sence of mystery.</li><br><li>To Portray Loneliness<br> Mood can be created very successfully using lighting no matter the subject. Here a pawn is used to create a sence of lonliness. The pawn is shadowed under leaves. The light color signifies a feeling of emptyness.</li></ol>";
	content[7] = "Virtual Reality Project: <i>An underwater experiance with 3 Orcas.</i><br>The experiance plays out as a game, with each orca teaching you something about being an orca. I worked on a single experiance using Granny.<br><br><b>My Contributions</b><br>1. Worked in conceptualizing and setting up the Granny experiance.<br>2.Environment setup, lighting, and programming the interactions within the experiance.<br>3. Worked with the menu setup and intergration of the free swim components. Free Swim was an under water exploration experiance added to integrate all three of the granny experiances as one. <br>4. Researched, tested and incorporated the fins on the user controls to catch and eat fish and to simulate the fin swim motion using Unity's lastest Rigging and Animate packages.";
  content[8] = "Game Engine Development: Implemented using HTML, Javascript and WebGL.<br><br><b>Game Features:</b> <br>Animated Assets<br>Point light,<br>Directional light,<br>Normal Map<br>Per-Pixel Collision<br>Bounding Box collision,<br>Physics Engine<br><br>Team Project:<br><b>Kevin Ulrich:</b> Game Design and Primary Developer<br><b>Robert Stewart:</b> Game Design and Physics Engine<br><b>Sharanya Sudhakar:</b> Art Assets, Lighting and Secondary Developer.<br><br><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FN_0WV7z7yM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe><br>Sprite Sheet: Created using Illustrator<br><img src=\"images/spitesheet.jpg\" width=\"600\" height=\"300\" alt=\"JPod\"/><br>Game Initial Design: This mockup was created using Photoshop after the game was designed and assets were developed.<br><img src=\"images/gamemockup.JPG\" width=\"600\" height=\"400\" alt=\"JPod\"/><br> Game Screenshot with maps and lights.<br><img src=\"images\/shot1.jpg\" width=\"600\" height=\"400\" alt=\"JPod\">";

  content[9] = "Mediums used: Acrylic, Pencil, Charcoal and Pastels:<br> All art projects are personal projects. They are a hobby more than anything. They range fromt things that have inspired me to things that catch my fancy.<br><br> The statue in <i>Smile in Repose</i> which is along Route 202 in Woodenville, WA, bring s a feeling of grandure and fun for me. The same statue is reimagine is colorful splendor in <i>Repose Reimagined</i>.<br><br> The cat was inspired by an awe for fur. I am always fasinated by fur be it in 3D or on paper.<br><br><i>Digital Waves</i> is my first foray into digital painting, I picked a subject I had never put paint to paper on and came about with facinating results owing to the details the medium afforded.<br><br><i>Knights a Splendor</i> was created with just two horse statues about 3 inches tall. The horses on either side are the same positioned in inverse. A tricky drawing in charcoal it is meant to portray solidarity and unity. The light thrown in stark contrast with not much middle ground.";
	document.getElementById("pg").innerHTML = content[i];
}
