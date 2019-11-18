var slideIndex = 1;
showSlides(slideIndex);

// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function expandBlockClose(){
	document.getElementById("expandblock").style.display = "none";
}

function expandBlock(image){
  	var expandImg = document.getElementById("expandedImg");
	var expandtxt = document.getElementById("expandedText");
	var v1 = document.getElementById("video1");
	var v2 = document.getElementById("video2");
	var v3 = document.getElementById("video3");
	var content = new Array(3);
	content[0]= "The dripping honey is shader effect applied on a flat plane.";
	content[1] = "The floating Globules in this video are scripted on the fly and their effects are applied with a shader.<br>The bobbing effect on the shader is using a sine cruve and the ascension is elliptical.";
	content[2] = "The transition between the two textures has been added using a shader and scripted to include the particle effect. The blighted object slowly sheds its previous skin.";
	var imgs=["images/honeylight-concept.jpg",
			 "images/stympy-concept.jpg",
			 "images/blight_web.jpg"];
  // Use the same src in the expanded image as the image being clicked on from the grid
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