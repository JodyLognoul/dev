(function () {

  var notification = $('#input-msg-email'),
      input = $('#inputEmail'),
      inputValue,
      delayedCallback;

  input.on('keyup',function() {

    inputValue = $(this).val();
    
    clearTimeout( delayedCallback );
    
    delayedCallback = setTimeout(function(){
      
      notification.removeClass('valid error');
      notification.addClass('checking');
    
      $.ajax({
        url: 'http://dev.local/laravel/public/users/email_available',
        dataType: 'json',
        data: { 
          'email' : inputValue
        },
        success: function( data ){

          notification.removeClass('valid checking error');
          notification.addClass( data.valid?'valid': 'error' );
          notification.html(data.valid ? 'Nous vous enverrons une confirmation par email.' : data.msg);
          }
        }
      );
    }, 800);
  });      
})();