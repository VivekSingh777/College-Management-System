$('document').ready(function () {
   /* $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});*/
    $("#sticky-nav").sticky({topSpacing:0});


})

// Make this function external like I did in the video
function _(x){
	return document.getElementById(x);
}

// And all over the site from now on you can get html elements by their id by simply using
_("div1").innerHTML = "Hello World";
