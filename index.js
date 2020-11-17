console.log('emma');
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


$('.menu').click(function(){
  $(this).toggleClass('icon-menu');
  $(this).toggleClass('icon-cross');
  $('nav').toggleClass('down');
  $('nav li a').removeClass('down');
  $('.search').removeClass('down');
  $('.icon-search').removeClass('icon-cross');
});

//Make sure the menu icon behaves corectly when the menu is open
$('nav li a').click(function(){
    $('.menu').addClass('icon-menu');
    $('.menu').removeClass('icon-cross');
    $('nav').toggleClass('down');
});

//show and hide the search bar, also make sure if the menu is open to hide the menu, and ensure the menu icon state is correct
$('.icon-search').click(function(){
    $(this).toggleClass('icon-cross');
    $('.menu').addClass('icon-menu');
    $('.menu').removeClass('icon-cross');
    $('.search').toggleClass('down');
    $('nav').removeClass('down');
});



/* slider */ 


