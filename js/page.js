jQuery( document ).ready( function($){
    // sub-menu fixing
    // var height = document.querySelector('.site-header.page').clientHeight + 25;
    // var sideBox = document.querySelector('.sidebox');
    //
    // window.onscroll = function() { fixSidebox() };
    //
    // function fixSidebox() {
    //     if ( window.scrollY > height ) {
    //         sideBox.classList.add("fixed");
    //     } else {
    //         sideBox.classList.remove("fixed");
    //     }
    // }

    // ajax Test
    var form = $('#ajax-contact');

    var formMessages = $('#form-messages');

    $(form).submit(function(e) {
        e.preventDefault();

        var formData = {
  				'name' : $( '#name').val(),
  				'email' : $( '#email').val(),
          'sort' : $( '#sort' ).val(),
  				'message' : $( '#message').val()
  			};

  			$.ajax({
  				type: 'POST',
  				dataType: 'json',
  				url: ajaxHandler.adminAjax,
  				data: {
  					action: 'process_send_email',
  					data: formData,
            submission: $('#xyq').val(),
  					security: ajaxHandler.security
  				}
        })
  			.done(function(response) {

    			$(formMessages).removeClass('error');
    			$(formMessages).addClass('success');

    			$(formMessages).text(response);

    			$('#name').val('');
    			$('#email').val('');
    			$('#message').val('');
          $('#sort').val('');
    		})
    		.fail(function(data) {
    			// Make sure that the formMessages div has the 'error' class.
    			$(formMessages).removeClass('success');
    			$(formMessages).addClass('error');

      		// Set the message text.
    			if (data.responseText !== '') {
    				$(formMessages).text(data.responseText);
    			} else {
    				$(formMessages).text('Oops! An error occured and your message could not be sent.');
    			}
    		});

      });
});
