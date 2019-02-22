import '../css/accueil.scss';

const $ = require('jquery');

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