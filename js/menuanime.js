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

filterSelection("all")

function putcontent(i)
{
	var content = new Array(8);
	content[0]= "All of them contain programming of one kind or the other, except for the art tab. <br>Primary languages used <b>Cg, C#, C++ and javascript.</b>";
	content[1] = "Shaders are written for Unity and created using the shader-graph for Unity 2018 & above versions and coded as Surface Shaders using <i>Cg</i> for older versions.";
	content[2] = "Graphics<br>";
	content[3] = "Virtual Reality Project: <i>An underwater experiance with 3 Orcas.</i><br>The experiance plays out as a game, with each orca teaching you something about being an orca.<br><br><b>My Contributiions</b><br>1. Worked in conceptualizing and setting up the Granny experiance.<br>2.Environment setup, lighting, and programming the interactions within the experiance.<br>3. Worked with the menu setup and intergration of the free swim components.<br>4. Researched, tested and incorporated the fins on the user to catch and eat fish and to simulate the fin swim motion using Unity's lastest Rigging and Animate packages.";
	content[4] = "Game Engine Development: Class projects and Final Game Implemented using HTML, Javascript and WebGL.";
	content[5] = "Mediums used: Acrylic, Pencil, Charcoal and Pastels<br>";
	content[6] = "mini movie";
	content[7] = "Ongoing graphics and shader works, concepts, ideas and projects in the works.";
	document.getElementById("pg").innerHTML = content[i];
}