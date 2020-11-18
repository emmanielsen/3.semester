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


function toggleCP(){
	var cp = document.getElementById("cp");
	if(cp.style.opacity == 1){
		cp.style.opacity = 0;
		cp.style.right = "-260px"; // remove it from active screen space
	} else {
		cp.style.right = "0px"; // return it to active screen space
		cp.style.opacity = 1;
	}
}

/* slider */ 


