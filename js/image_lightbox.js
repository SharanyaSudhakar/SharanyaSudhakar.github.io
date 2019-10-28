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
	var expandImg = document.getElementById("expandedImg");
	expandImg.parentElement.style.display = "none";
}

function expandBlock(image){
  var expandImg = document.getElementById("expandedImg");
	var imgs=["images/honeylight-concept_web.jpg",
			 "images/stumpywell_web.jpg",
			 "images/blight_web.jpg"];
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs[image-1];
  expandImg.parentElement.style.display = "block";

}