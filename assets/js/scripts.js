var slideIndex = 1;
var slideIds = ["mySlides-nightmare", "mySlides-invasion","mySlides-donjon_elemental","mySlides-donjon_divinity","mySlides-donjon_temple","mySlides-field"];
for (i = 0; i < slideIds.length; i++) {
	showSlides(slideIndex,slideIds[i]);
}

// Next/previous controls
function plusSlides(n, id) {
  showSlides(slideIndex += n, id);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n,id) {
  var i;
  var slides = document.getElementsByClassName(id);
  //var dots = document.getElementsByClassName("demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  //for (i = 0; i < dots.length; i++) {
    //dots[i].className = dots[i].className.replace(" active", "");
  //}
  slides[slideIndex-1].style.display = "block";
  //dots[slideIndex-1].className += " active";
}