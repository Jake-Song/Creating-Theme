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
    var images = document.querySelectorAll('.image-section img');
    var texts = document.querySelectorAll('.text-section .text');
    var button = document.querySelectorAll('.selector button');
    var amount = images.length;
    var currentImage = images[0];
    var currentText = texts[0];

    function navigate( counter ){
      currentImage.classList.remove('current');
      currentText.classList.remove('current');

      currentImage = images[counter];
      currentText = texts[counter];

      currentImage.classList.add('current');
      currentText.classList.add('current');
    }

    var firstBtn = button[0];
    var secondBtn = button[1];
    var thirdBtn = button[2];

    firstBtn.addEventListener( 'click', function(e){
      navigate(0);
    });
    secondBtn.addEventListener( 'click', function(e){
      navigate(1);
    });
    thirdBtn.addEventListener( 'click', function(e){
      navigate(2);
    });
    navigate(0);

    // Modal
    var dialog = document.getElementsByClassName('dialog');
    var dialogOveray = document.getElementsByClassName('dialog-overay');
    var btn = document.getElementsByClassName('dialog-button');
    var close = document.getElementsByClassName('close-button');

    for( var i = 0; i < dialog.length; i++ ){
        btn[i].onclick = function( index ){
          return function(){
            dialog[index].classList.add('dialog-open');
          }
        }(i);
        close[i].onclick = function( index ){
          return function(){
            dialog[index].classList.remove('dialog-open');
          }
        }(i);
        dialogOveray[i].onclick = function( index ){
          return function(){
            dialog[index].classList.remove('dialog-open');
          }
        }(i);
    }


});
