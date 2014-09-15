/**
 * Created by root on 15/9/14.
 */

$(".login_form" ).submit(function(e) {
    console.log($("#password").val().length);
    var pattern=/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})$/i;
    if (!pattern.test($("#userid").val().trim())) {
        $( ".validate_email" ).text("Enter a valid email").show().fadeOut( 10000 );
        e.preventDefault();
    }
    else if ($("#password").val().trim().length==0 ){
        $( ".validate_pass" ).text("Enter a password").show().fadeOut( 10000 );
        e.preventDefault();
    }
    else
        return;

});
