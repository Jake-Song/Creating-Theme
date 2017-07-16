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

    // video selector
    var leftBox = document.querySelector('.left');
    var rightBox = document.querySelector('.right');
    var button = document.querySelectorAll('.selector button');
    var firstBtn = button[0];
    var secondBtn = button[1];
    var imgItem = leftBox.querySelectorAll('img');
    var textItem = rightBox.querySelectorAll('.text-box');

    firstBtn.addEventListener( 'click', function(e){
      imgItem[1].classList.remove('current');
      textItem[1].classList.remove('current');
      imgItem[0].classList.add('current');
      textItem[0].classList.add('current');
    } );

    secondBtn.addEventListener( 'click', function(e){
      imgItem[0].classList.remove('current');
      textItem[0].classList.remove('current');
      imgItem[1].classList.add('current');
      textItem[1].classList.add('current');
    } );
});
