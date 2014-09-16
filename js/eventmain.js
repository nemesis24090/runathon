/**
 * Created by root on 15/9/14.
 */

$(document).ready(function(e){
    $(".comment-alert").hide();
    $(".like-alert").hide();
    // $('#links').offset({top:parseInt($(".profile-pic").height())+parseInt($(".profile-pic").offset().top),left:$(".profile-pic").offset().left});
});

if(isset_event){
    $("#review_submitbtn").click(function(e){
        if(isset_session){
            if($("#review_content").val().length>0){
                var content=$("#review_content").val();
                jQuery.ajax({
                    type:"POST",
                    url:base_url+"index.php/event/postReview",
                    data:"content="+content+"&event_id="+event_id,
                    //Rating Code is remaining
                    success:function($data){
                        console.log($data);
                        if($data==true){
                            $("#review_content").val("");
                            $(".comment-list-panel").prepend('<div class="media"><a class="pull-left" href=""><img class="media-object img-circle comment-img" src="'+base_url+"/profile_pic/"+profile_pic+'"></a><div class="media-body"><h4 class="media-heading">'+user_name+'</h4><p><span class="comment-timestamp" data-livestamp="'+new Date()+'"></span></p>'+content+'</div></div>');
                        }
                        else
                            $( ".comment-alert" ).text("Unable to post comment...try later").show().fadeOut( 8000 );
                    }
                });
            }
            else
                $( ".comment-alert" ).text("Please provide some content").show().fadeOut( 8000 );
        }
        else{
            $( ".comment-alert" ).text("Please login to comment").show().fadeOut( 8000 );
        }
    });
}