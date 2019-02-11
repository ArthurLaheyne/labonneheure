import '../../css/demo/full-video-background.scss';

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
});