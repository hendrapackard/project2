  $(document).ready(function(){
        $('.submit').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(1500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

    });