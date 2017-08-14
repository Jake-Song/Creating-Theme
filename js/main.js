jQuery( document ).ready( function($){
    $('.navbar-toggle').on('click', function(e){
    e.stopImmediatePropagation();
    $('.navbar.navbar-default').toggleClass('show-menu');
  });
});
