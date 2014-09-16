/**
 * Created by root on 15/9/14.
 */
$("#pass").keyup(function(a){var b=passwordScore($("#pass").val());console.log(b);if(b>60&&b<=100){$(".pass-score").css("color","green");$(".pass-score").text("strong")}else{if(b>40&&b<60){$(".pass-score").css("color","blue");$(".pass-score").text("good")}else{if(b>20&&b<=40){$(".pass-score").css("color","#CCCC00");$(".pass-score").text("weak")}else{$(".pass-score").css("color","red");$(".pass-score").text("poor")}}}});

$("#email").blur(function(e){
    if($("#email").val() != ""){
        jQuery.ajax({
            type:"POST",
            url:base_url+"index.php/login/emailCheck",
            data:"email="+$("#email").val().trim(),

            success:function($data){
                console.log($data);
                if($data == false){
                    e.target.style.borderColor="#B81B1B"
                    e.target.value="";
                    $( ".email_sign" ).text("Email is already registered with us").fadeOut( 10000 );
                }
                else{
                    e.target.style.borderColor="#00FF3C";
                }
            }
        });
    }
});

$(".sign_form").submit(function(e){
    var email_pattern=/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})$/i;
    console.log("out");
    if(!(email_pattern.test($("#email").val().trim()))){
        console.log("in");
        $( ".email_sign" ).text("Enter a valid email").show().fadeOut( 10000 );
        e.preventDefault();
    }

    else if($("#pass").val().trim().length==0 || passwordScore($("#pass").val())<20){
        $(".password_sign").text("Please Provide a better password").show().fadeOut( 10000 );
        e.preventDefault();
    }

    else if($("#pass").val().trim() != $("#confpass").val().trim()){
        $(".confpass_sign").text("Enter same as password field").show().fadeOut( 10000 );
        e.preventDefault();
    }

    else if($("#fullname").val().trim().length==0){
        $(".name_sign").text("Please Provide ur name").show().fadeOut( 10000 );
        e.preventDefault();
    }

    else
        return;
});