jQuery( document ).ready( function($){
  $('.menu-close').on('click', function(){
    $('button.navbar-toggle').addClass('collapsed').attr('aria-expanded', false);
    $('#primary-menu').removeClass('in');
  });
});
