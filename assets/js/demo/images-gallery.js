import '../../css/demo/images-gallery.scss';
import '../../blueimp-gallery/css/blueimp-gallery.min.css';
window.blueimp = require("../../blueimp-gallery/js/blueimp-gallery.min.js");

document.getElementById('links').onclick = function (event) {
    console.log('oui?');
    event = event || window.event;
    event.preventDefault();
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {
            index: link, 
            event: event,
            slideshowInterval: 3000,
        },
        links = this.getElementsByTagName('a');
        window.blueimp(links, options);
};