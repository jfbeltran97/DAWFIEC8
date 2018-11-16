var slideIndex = 1;
var numSlidesToShow = 4;
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
} 

function insertAfter(newNode, referenceNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function insertBefore(newNode, referenceNode){
    referenceNode.parentNode.insertBefore(newNode, referenceNode);
}

function passClients(n){

  var clients = document.getElementsByClassName("clientes");
  
  if (n == 1){ 
    insertAfter(clients[0], clients[clients.length-1]);
  }
  if (n == -1){
    insertBefore(clients[clients.length-1], clients[0]);
  }
  
  for(var i = 0; i < clients.length; i++) {
    clients[i].style.display = "none";
  }

  for(var i = 0; i < numSlidesToShow; i++){
    clients[i].style.display = "inline-block";
  }

}

