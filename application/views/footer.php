<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 23/8/14
 * Time: 9:41 PM
 */ ?>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-4">
                <ul class="list-unstyled sitemap">
                    <li><a href=""><span class="glyphicon glyphicon-hand-right"></span> ABOUT US</a></li>
                    <li><a href=""><span class="glyphicon glyphicon-hand-right"></span> CAREERS</a></li>
                    <li><a href=""><span class="glyphicon glyphicon-hand-right"></span> FAQs</a></li>
                    <li><a href=""><span class="glyphicon glyphicon-hand-right"></span> ADVERTISING</a></li>
                    <li><a href=""><span class="glyphicon glyphicon-hand-right"></span> POLICIES</a></li>
                </ul><!--end list unstyled-->
            </div>
            <div class="col-lg-4 ">
                <div class="social">
                    <a  target="_blank" href="" ><img class="facebook" src="<?php echo base_url()?>img/facebook-1.jpg" alt="Facebook"></a>
                    <a class="twitter" target="_blank" href="" ><img src="<?php echo base_url()?>/img/twitter-1.jpg"  alt="Twitter"></a>
                    <a class="googleplus" target="_blank" href="" ><img src="<?php echo base_url()?>img/googleplus-1.jpg" alt="Google Plus"></a>
                </div><br>
                <form class="form-inline">
                    <input type="text" class="form-control" placeholder="Email Address">
                    <button type="button" class="btn btn-danger">Subscribe</button>
                </form>
                <h6>Copyright © Runathon Company - 2014</h6>

            </div><!--end right col footer-->
            <div class="col-lg-2">
            </div>
        </div><!--end footer row-->
    </div><!--end footer container-->

</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/myscript.js"></script>

<script type="text/javascript">

    $(document).ready(function(e){
       $(".comment-alert").hide();
       $(".like-alert").hide();
    });

    $("#email").blur(function(e){
        if($("#email").val() != ""){
            jQuery.ajax({
                type:"POST",
                url:"<?php echo base_url()?>index.php/login/emailCheck",
                data:"email="+$("#email").val(),

                success:function($data){
                    console.log($data);
                    if($data == false){
                        e.target.style.borderColor="#B81B1B"
                        e.target.val="";
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
        if(!(email_pattern.test($("#email").val()))){
            console.log("in");
            $( ".email_sign" ).text("Enter a valid email").fadeOut( 10000 );
            e.preventDefault();
        }

        else if($("#pass").val().length==0){
            $(".password_sign").text("Please Provide a password").fadeOut( 10000 );
            e.preventDefault();
        }

        else if($("#pass").val() != $("#confpass").val()){
            $(".confpass_sign").text("Enter same as password field").fadeOut( 10000 );
            e.preventDefault();
        }

        else if($("#fullname").val().length==0){
            $(".name_sign").text("Please Provide ur name").fadeOut( 10000 );
            e.preventDefault();
        }

        else
            return;
    });

    $(".login_form" ).submit(function(e) {
        console.log($("#password").val().length);
        var pattern=/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})$/i;
        if (!pattern.test($("#userid").val())) {
            $( ".validate_email" ).text("Enter a valid email").show().fadeOut( 10000 );
            e.preventDefault();
        }
        else if ($("#password").val().length==0 ){
            $( ".validate_pass" ).text("Enter a password").show().fadeOut( 10000 );
            e.preventDefault();
        }
        else
        return;

    });

    $("#like_btn").click(function(e){
        <?php if(($this->session->userdata("session_name") && $this->session->userdata("session_id"))){ ?>
       if($(this).children()[0].className.trim()=="glyphicon glyphicon-thumbs-down"){
        //   $(this).children()[0].removeClass();
           jQuery.ajax({
               type:"POST",
               url:"<?php echo base_url()?>index.php/Column/updateUnlike",
               data:"column_id="+<?php echo $column_id?>,

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
               url:"<?php echo base_url()?>index.php/Column/updateLike",
               data:"column_id="+<?php echo $column_id?>,

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
        <?php }
        else { ?>
        $( ".like-alert" ).text("Please login to like this Column").show().fadeOut( 8000 );
        <?php } ?>
    });


    $("#comment_btn").click(function(e){
        <?php if(($this->session->userdata("session_name") && $this->session->userdata("session_id"))){ ?>
                if($("#comment_content").val().length>0){
                    var content=$("#comment_content").val();
                    jQuery.ajax({
                        type:"POST",
                        url:"<?php echo base_url()?>index.php/Column/postComment",
                        data:"content="+content+"&column_id="+<?php echo $column_id?>,

                        success:function($data){
                            console.log($data);
                            if($data==true){
                                $("#comment_content").val("");
                                $(".comment-list-panel").prepend('<div class="media"><a class="pull-left" href=""><img class="media-object img-circle comment-img" src="<?php echo base_url()."profile_pic/".$this->session->userdata("profile_pic")?>"></a><div class="media-body"><h4 class="media-heading"><?php echo $this->session->userdata("user_name")?></h4>'+content+'</div></div>');
                            }
                            else
                                $( ".comment-alert" ).text("Unable to post comment...try later").show().fadeOut( 8000 );
                        }
                    });
                }
                else
                    $( ".comment-alert" ).text("Please provide some content").show().fadeOut( 8000 );
        <?php }
        else { ?>
             $( ".comment-alert" ).text("Please login to comment").show().fadeOut( 8000 );
        <?php } ?>
    });
</script>

</body>

</html>