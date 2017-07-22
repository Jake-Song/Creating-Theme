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
    var modal = document.getElementsByClassName('modal')[0];
    var btn = document.getElementsByClassName('modal-button')[0];
    var span = document.getElementsByClassName('close')[0];

    btn.onclick = function(){
      modal.classList.add('modal-open');
    }
    span.onclick = function(){
      modal.classList.remove('modal-open');
    }
    window.onclick = function(event){
      if( event.target == modal ){
        modal.style.display = "none";
      }
    }
});
