jQuery( document ).ready( function($){

    //sub-menu fixing
    var height = $('.site-header.page').height() + 25;
    var sideBox = $('.sidebox');

    $(document).on("scroll", fixSidebox);

    function fixSidebox() {
        var scrollPos = $(document).scrollTop();
        if ( scrollPos > height ) {
            sideBox.addClass("fixed");
        } else {
            sideBox.removeClass("fixed");
        }
    }

    $(document).on("scroll", onScrollSpy);

   //smooth scroll
   $('a[href^="."]').on('click', function(e){

        e.preventDefault();
        // $(document).off("scroll");

        var target = this.hash.substr(1);
        var name = $('#' + target);

        name.stop().animatescroll({
            easing: 'easeInOutExpo',
            onScrollStart: function(){
               $(document).on("scroll", onScrollSpy);
            },
        });
    });

  function onScrollSpy(event){
    var scrollPos =  $(document).scrollTop();
    if( $('a[href^="."]') ){
    $('a[href^="."]').each(function(){
        var currLink = $(this);
        var refElement = $('#' + this.hash.substr(1));

        if(refElement.position().top <= scrollPos + 32 && refElement.position().top + refElement.height() > scrollPos){

          $('a[href^="."]').removeClass("current");
          currLink.addClass("current");
        } else {
          currLink.removeClass("current");
        }
    });
  }
  }

  // 페이지 전환 Ajax
  var isAnimating = false,
  newLocation = '';
  firstLoad = false;

  //trigger smooth transition from the actual page to the new one
  $('.sub-index-child').on('click', 'ol li a', function(event){
    event.preventDefault();
    if( !$(this).parent().hasClass('current_page_item') ){
      $('.sub-index-child li').removeClass('current_page_item');
      $(this).parent().addClass('current_page_item');
      //detect which page has been selected
      var newPage = $(this).attr('href');
      //if the page is not already being animated - trigger animation
      if( !isAnimating ) changePage(newPage, true);
      firstLoad = true;
    }
      if( $(document).scrollTop() < 280){
        var offset = (280 - $(document).scrollTop()) / 2;
        $('.loading-bar-container').css('margin-top', offset);
      } else{
        $('.loading-bar-container').css('margin-top', 0);
      }
      $('.loading-bar').css('background', '#adadad');
  });

  $(window).on('popstate', function() {
  	if( firstLoad ) {
      /*
      Safari emits a popstate event on page load - check if firstLoad is true before animating
      if it's false - the page has just been loaded
      */
      var newPage = location.href;
      var subMenuLink = $('.sub-index-child li a');

      $('.loading-bar').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
          subMenuLink.each(function(){
            if( newPage == $(this).attr('href') ){
              subMenuLink.parent().removeClass('current_page_item');
              $(this).parent().addClass('current_page_item');
            }
          });
        $('.loading-bar').off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
      });

      if( !isAnimating  &&  newLocation != newPage ) changePage(newPage, false);

    }
    firstLoad = true;
	});

  function changePage(url, bool) {
    isAnimating = true;
    // trigger page animation
    $('body').addClass('page-is-changing');
    $('.loading-bar').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
    	loadNewContent(url, bool);
      newLocation = url;
      $('.loading-bar').off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
    });
    //if browser doesn't support CSS transitions
    if( !transitionsSupported() ) {
      loadNewContent(url, bool);
      newLocation = url;
    }
	}

  function loadNewContent(url, bool) {

    var section = $('<div class="content-box"></div>');

  	section.load(url+' .content-box > *', function(event){

      // load new content and replace <main> content with the new one
      $('.ajax-container').html(section);
      //if browser doesn't support CSS transitions - dont wait for the end of transitions
      var delay = ( transitionsSupported() ) ? 1200 : 0;
      if( $(document).scrollTop() < 280){
        var offset = (280 - $(document).scrollTop()) / 2;
        $('.loading-bar-container').css('margin-top', offset);
      }
      $('.loading-bar').css('background', '#ffbc00');

      setTimeout(function(){
        //wait for the end of the transition on the loading bar before revealing the new content
        $('body').removeClass('page-is-changing');
        $('.loading-bar').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
          isAnimating = false;
          $('.loading-bar').off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
        });

        if( !transitionsSupported() ) isAnimating = false;
      }, delay);

      if(url!=window.location && bool){
        //add the new page to the window.history
        //if the new page was triggered by a 'popstate' event, don't add it
        window.history.pushState({path: url},'',url);
      }
		});
  }

  function transitionsSupported() {
      return $('html').hasClass('csstransitions');
  }
  
  $('.dropdown-toggle').on('click', function(e){
    e.stopPropagation();
  });
});
