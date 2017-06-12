// (function($, window, document) {

  // var slideshow = $('.slideshow'),
  //     slides = $('.slide')
  //
  //     console.log('DEMO', slideshow, slides);
  //
  // slideshow.children(':not(:last)').hide()
  //
  // slides.on('click', function(){
  //   slideshow.children(':last').fadeOut(600, function(){
  //     $(this).prependTo( slideshow )
  //   }).prev().fadeIn(600)
  // })



// }(window.jQuery, window, document));



/**
* See: http://www.css-101.org/articles/ken-burns_effect/css-transition.php
*/

/**
* The idea is to cycle through the images to apply the "fx" class to them every n seconds.
* We can't simply set and remove that class though, because that would make the previous image move back into its original position while the new one fades in.
* We need to keep the class on two images at a time (the two that are involved with the transition).
*/

(function(){

  // we set the 'fx' class on the first image when the page loads
  // document.getElementById('banner-slideshow').getElementById('banner-slideshow-image')[0].className = "fx";
  document.querySelectorAll('#banner-slideshow-image')[0].className = "fx";

  // this calls the kenBurns function every 4 seconds
  // you can increase or decrease this value to get different effects
  window.setInterval(kenBurns, 4000);

  // the third variable is to keep track of where we are in the loop
  // if it is set to 1 (instead of 0) it is because the first image is styled when the page loads
  // var images          = document.getElementById('banner-slideshow').getElementById('banner-slideshow-image'),
  var images          = document.querySelectorAll('#banner-slideshow-image'),
      numberOfImages  = images.length,
      i               = 1;

  function kenBurns() {
  if(i==numberOfImages){ i = 0;}
  images[i].className = "fx";

  // we can't remove the class from the previous element or we'd get a bouncing effect so we clean up the one before last
  // (there must be a smarter way to do this though)
  if(i===0){ images[numberOfImages-2].className = "";}
  if(i===1){ images[numberOfImages-1].className = "";}
  if(i>1){ images[i-2].className = "";}
  i++;

  }
})();
