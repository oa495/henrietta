var gallery = document.querySelector('#gallery'); // select parent element of all gallery images
var images = document.querySelectorAll('section > img'); // select only images within section tag

function changeOpacity(e) {
  if (e.target.tagName == 'IMG') { // only work with img elements
    for (var i = 0; i < images.length; i++) {
      images[i].className = 'gallery-image-opacity'; // change all gallery image classes,
    }
    e.target.className = 'gallery-image'; // but keep selected image opaque
    e.target.addEventListener('mouseout', resetOpacity, false); // event listener to reset opacity
  }
  e.stopPropagation();
}

function resetOpacity() {
  for (var i = 0; i < images.length; i++) {
    images[i].className = 'gallery-image'; // reset all gallery image classes
  }
}

gallery.addEventListener('mouseover', changeOpacity, false);

document.onkeydown = checkKey;

function checkKey(e) {

    e = e || window.event;

    if (e.keyCode == '38') {
        scrollToTop(100);
    }
}
function scrollToTop(scrollDuration) {
    var scrollStep = -window.scrollY / (scrollDuration / 15),
        scrollInterval = setInterval(function(){
        if ( window.scrollY != 0 ) {
            window.scrollBy( 0, scrollStep );
        }
        else clearInterval(scrollInterval); 
    },15);
}