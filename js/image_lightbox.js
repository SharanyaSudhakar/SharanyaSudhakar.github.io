function expandBlockClose()
{
	document.getElementById("expandblock").style.display = "none";
}

function expandBlock(image)
{
	var expandImg = document.getElementById("expandedImg");
	var expandtxt = document.getElementById("expandedText");
	var v1 = document.getElementById("video1");
	var v2 = document.getElementById("video2");
	var v3 = document.getElementById("video3");
	var content = new Array(3);
	content[0]= "The dripping honey is a shader effect added to a flat plane. <br><br><b> Challenges:</b><br>Honey texture and viscosity. <br> Cannot be hand animated nor can particles be effectively used<br> should be instantiated and used to produce random dripping honey.";
	content[1] = "The floating Globules in this video are scripted on the fly and their effects are applied with a shader.<br>The bobbing effect on the shader is using a sine cruve and the ascension is elliptical.";
	content[2] = "The transition between the two textures has been added using a shader and scripted to include the particle effect. The blighted object slowly sheds its previous skin.";
	var imgs=["images/honeylight-concept.jpg","images/stympy-concept.jpg","images/blightblue_web.jpg"];/* Use the same src in the expanded image as the image being clicked on from the grid*/
	image--;
  expandImg.src = imgs[image];
  expandtxt.innerHTML = content[image];
	v1.style.display = "none";
	v2.style.display = "none";
	v3.style.display = "none";
	if(image == 0)
		v1.style.display = "block";
	if(image == 1)
		v2.style.display = "block";
	if(image == 2)
		v3.style.display = "block";
  document.getElementById("expandblock").style.display = "block";

}

function expandBlockVRClose()
{
	document.getElementById("expandblockVR").style.display = "none";
}

function expandBlockGRClose()
{
	document.getElementById("expandblockGR").style.display = "none";
}

function expandBlockCloseall()
{
	expandBlockVRClose();
	expandBlockGRClose();
	expandBlockClose();
}

function expandBlockVR(image)
{
	var expandImg = document.getElementById("expandedImgVR");
	var expandtxt = document.getElementById("expandedTextVR");
	var v1 = document.getElementById("VR1");
	var v2 = document.getElementById("VR2");
	var v3 = document.getElementById("GR5");
	var content = new Array(3);
	content[0]= "VR Project<br>An individual player experiance with an Orca. This experaicne is with Granny. she teaches the player wich fish to eat -salmon. An interactive experiance where the user has simulated whale fins. The whale fins where created using the Runtime Animation Rigging plugin of Unity 2019.";
	content[1] = "Whale Fins Simulation test. Shows the animation in response to controls and the runtime rig in detail.";
	content[2] = "A school assignment to incorporate texture mapping, texture placement, per-vertex color and 3d modeling, quads and surface normals. The texture normals cal be selected and moved. And the 3d mesh can be modeled to create a curve that will be redered by other points along the same plane. The mesh can be extruded.";
	var imgs=["videos/jpodgranny.jpg","videos/whalefins-short.jpg","videos/mp5.jpg"];/* Use the same src in the expanded image as the image being clicked on from the grid*/
	image--;
  expandImg.src = imgs[image];
  expandtxt.innerHTML = content[image];
	v1.style.display = "none";
	v2.style.display = "none";
	v3.style.display = "none";
	if(image == 0)
		v1.style.display = "block";
	if(image == 1)
		v2.style.display = "block";
	if(image == 2)
		v3.style.display = "block";
  document.getElementById("expandblockVR").style.display = "block";

}

function expandBlockGR(image)
{
	var expandImg = document.getElementById("expandedImgGR");
	var expandtxt = document.getElementById("expandedTextGR");
	var v1 = document.getElementById("GR00");
	var v2 = document.getElementById("GR3");
	var v3 = document.getElementById("GR2");
	var v4 = document.getElementById("GR1");
	var content = new Array(4);
	content[0]= "Graphics project to combine gameobjects as one single mesh. Each object should retail its textures. When the objects are combines their vertices, normals, uvs and triagles are used. Their uv2 channel is used to store the texture array index value. The textures are combines using texture array and a shader for 2dArray is created to apply the individual textures to the selected objects.";
	content[1]= "Graphics project involving spheres shooting onto the target. The target bounces the spheres. If the sphere hit the back of the target they will not be repelled. Each sphere has shadows projected on the cylinder. The vector directions can be changed using the wall disks.";
	content[2] = "This project demonstrates parenting of objects and their transformation as a group. Two slice shaders effects have been added as extra credit using alpha clipping.";
	content[3] = "An introductory assignment for the both unoty and hsader graph. This project demonstres creating and instantiating game objects, understanding the update function call and a simple shader is applied by multiplying two colors for each object.";
	var imgs=["videos/cominemesh.jpg","videos/mp3.jpg","videos/mp2.jpg","videos/mp1.jpg"];/* Use the same src in the expanded image as the image being clicked on from the grid*/
	image--;
  expandImg.src = imgs[image];
  expandtxt.innerHTML = content[image];
	v1.style.display = "none";
	v2.style.display = "none";
	v3.style.display = "none";
	v4.style.display = "none";
	if(image == 0)
		v1.style.display = "block";
	if(image == 1)
		v2.style.display = "block";
	if(image == 2)
		v3.style.display = "block";
	if(image == 3)
		v4.style.display = "block";
  document.getElementById("expandblockGR").style.display = "block";

}