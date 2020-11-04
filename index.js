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
/* hvad betyder $*/ 

("#menu-button").click(function(){
  (this).toggleClass("active");
  ("#line-1").toggleClass("active");
  ("#line-2").toggleClass("active");
  ("#line-3").toggleClass("active");
  ("#menu").slideToggle("slow");
});



/* slider */ 


