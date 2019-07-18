import '../css/accueil.scss';

const $ = require('jquery');


$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

$(document).ready(function() {
  let video = $('#myVideo').get(0);
  $('#myBtn').click( function() {
    if (video.paused) {
      video.play();
      $(this).html("Pause");
    } else {
      video.pause();
      $(this).html("Play");
    }
  });
  $('#myBtnVolume').click( function() {
    if (!video.muted && video.volume == 1) {
      video.volume = 0;
      $(this).html('<i class="fas fa-volume-mute"></i>');
    } else if (video.muted || video.volume == 0) {
      video.muted = false;
      video.volume = 0.1;
      $(this).html('<i class="fas fa-volume-down"></i>');
    } else {
      video.volume = 1;
      $(this).html('<i class="fas fa-volume-up"></i>');
    }
  });
});