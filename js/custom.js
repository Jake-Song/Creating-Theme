jQuery( document ).ready( function($){

    // Typewriter
    var elements = document.getElementsByClassName('typewrite');

    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
           var txtType = new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }

    var playButton = document.querySelector(".play-button");
    var pauseButton = document.querySelector(".pause-button");

    playButton.addEventListener('click', function(){
        if( !(txtType.typing) )
        txtType.play();
     });
    pauseButton.addEventListener('click', function(){
        txtType.pause();
    });
});
