/* global $, alert , console */

$(function () {
    'use strict';

    var 
    userError =true,
    mailError =true,
    msgError  =true;
    
    $('.username').blur(function (){

        if($(this).val().length <4 ) {

            $(this).css('border','solid 1px #f00');
            $(this).parent().find('.custom-alert').fadeIn(200);
            $(this).parent().find('.user').fadeIn(100);
            userError=true

        } else {

            $(this).css('border','solid 1px #080');
            $(this).parent().find('.custom-alert').fadeOut(200);
            $(this).parent().find('.user').fadeOut(100);
             userError=false

        }
    });

    $('.email').blur(function (){

        if($(this).val() ==='' ) {

            $(this).css('border','solid 1px #f00');
            $(this).parent().find('.custom-alert').fadeIn(200);
            $(this).parent().find('.user').fadeIn(100);
            mailError=true

        } else {

            $(this).css('border','solid 1px #080');
            $(this).parent().find('.custom-alert').fadeOut(200);
            $(this).parent().find('.user').fadeOut(100);
            mailError=false

        }
    });

     $('.message').blur(function (){

        if($(this).val().length <11) {

            $(this).css('border','solid 1px #f00');
            $(this).parent().find('.custom-alert').fadeIn(200);
            $(this).parent().find('.user').fadeIn(100);
            msgError=true
            
        } else {

            $(this).css('border','solid 1px #080');
            $(this).parent().find('.custom-alert').fadeOut(200);
            $(this).parent().find('.user').fadeOut(100);
            msgError=false

        }
     });
        // submit error validation 
        $('.contact-form1').submit(function (e) {
            if(userError === true || mailError === true  || msgError === true) { 

                e.preventDefault();

                $('.username, .email, .message').blur();

        }
    });

});