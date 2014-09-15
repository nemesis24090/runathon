/**
 * Created by root on 15/9/14.
 */
$(document).ready(function(e){
    $(".comment-alert").hide();
    $(".like-alert").hide();
    // $('#links').offset({top:parseInt($(".profile-pic").height())+parseInt($(".profile-pic").offset().top),left:$(".profile-pic").offset().left});
});

if(isset_column){
    $("#like_btn").click(function(e){
        if(isset_session){
            if($(this).children()[0].className.trim()=="glyphicon glyphicon-thumbs-down"){
                //   $(this).children()[0].removeClass();
                jQuery.ajax({
                    type:"POST",
                    url:base_url+"index.php/column/updateUnlike",
                    data:"column_id="+column_id,

                    success:function($data){
                        if($data){
                            $(".like_count").text(parseInt($(".like_count").text())-1);
                            $(".glyphicon-thumbs-down").addClass('glyphicon-thumbs-up').removeClass('glyphicon-thumbs-down');
                        }
                        else
                            $( ".like-alert" ).text("Unable to update now...try later").show().fadeOut( 8000 );
                    }
                });
            }
            else if($(this).children()[0].className.trim()=="glyphicon glyphicon-thumbs-up"){
                jQuery.ajax({
                    type:"POST",
                    url:base_url+"index.php/column/updateLike",
                    data:"column_id="+column_id,

                    success:function($data){
                        if($data){
                        $(".like_count").text(parseInt($(".like_count").text())+1);
                        $(".glyphicon-thumbs-up").addClass('glyphicon-thumbs-down').removeClass('glyphicon-thumbs-up');
                        }
                    else
                    $( ".like-alert" ).text("Unable to update now...try later").show().fadeOut( 8000 );
               }
           });
        }
        }
        else{
            $( ".like-alert" ).text("Please login to like this Column").show().fadeOut( 8000 );
        }
    });


}

if(isset_column){
    $("#comment_btn").click(function(e){
        if(isset_session){

            if($("#comment_content").val().length>0){
                var content=$("#comment_content").val();
                jQuery.ajax({
                    type:"POST",
                    url:base_url+"index.php/column/postComment",
                    data:"content="+content+"&column_id="+column_id,

                    success:function($data){
                        console.log($data);
                        if($data==true){
                        $("#comment_content").val("");
                        $(".comment-list-panel").prepend('<div class="media"><a class="pull-left" href=""><img class="media-object img-circle comment-img" src="'+base_url+"/profile_pic/"+profile_pic+'"></a><div class="media-body"><h4 class="media-heading">'+user_name+'</h4>'+content+'</div></div>');
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