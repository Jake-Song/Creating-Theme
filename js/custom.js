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
    var fourthBtn = button[3];

    firstBtn.addEventListener( 'click', function(e){
      navigate(0);
    });
    secondBtn.addEventListener( 'click', function(e){
      navigate(1);
    });
    thirdBtn.addEventListener( 'click', function(e){
      navigate(2);
    });
    fourthBtn.addEventListener( 'click', function(e){
      navigate(3);
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
            carousel();
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

// Portfolio Carousel
var carousel = (function(){
    var dialogOpened = document.querySelector('.dialog-open');
    var slideBox = dialogOpened.querySelector('.dialog-slide');
    var leftArrow = dialogOpened.querySelector('.dialog-left-arrow');
    var rightArrow = dialogOpened.querySelector('.dialog-right-arrow');
    var items = slideBox.querySelectorAll('img');

    var counter = 0;
    var imagesAmount = items.length;
    var current = items[0];

    function slideNavigate( direction ){
        current.classList.remove('show');
        counter = counter + direction;
        if( direction === -1 && counter < 0 ){
          counter = imagesAmount - 1;
        }
        if( direction === 1 && !items[counter] ){
          counter = 0;
        }
        current = items[counter];
        current.classList.add('show');
    }
    leftArrow.addEventListener( 'click', function(e){
      slideNavigate(-1);
    });
    rightArrow.addEventListener( 'click', function(e){
      slideNavigate(1);
    });
    slideNavigate(0);
})

});
