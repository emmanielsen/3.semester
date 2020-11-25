/* slideshow galleri */ 
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); 
}

/* buger menu*/
function myFunction(x) {
  x.classList.toggle("change");
}

function toogleSlideMenu(x){
  if(x.classList.contains('change')){
    document.getElementById('burger-menu').style.width = '100%';
  }
  else{
    document.getElementById('burger-menu').style.width = '0px';
  }
}