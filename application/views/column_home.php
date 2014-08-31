<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 24/8/14
 * Time: 2:50 PM
 */ ?>

<div class="container" id="main">

    <div class="modal fade" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">CONNECT WITH US</h4>
                </div><!--login Modal Header end-->
                <div class="modal-body col-lg-12" style="background-color: white">
                    <!--Login Screen-->
                    <div class="login_screen col-lg-6 text-center" style="padding-top: 13%;border-right: 2px solid rgb(211, 209, 209);padding-bottom: 9%;">
                        <a href="#" class="btn btn-large btn-primary">Connect with Facebook</a><br><br>
                        <a href="#" class="btn btn-large btn-danger">Connect with Google +</a><br><br>

                    </div><!--Login-Screen ends-->

                    <div class="col-lg-6">
                        <form class="login_form" action="<?php echo base_url()?>index.php/login/submitLogin" method="post">
                            <h2 class="form-signin-heading">Sign in Here</h2>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" id="userid" placeholder="Email id" name="user_id" value="">
                            </div>
                            <span class="validate_email alert-danger" role="alert"></span><br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>                        <span class="validate_pass alert-danger" role="alert"></span><br>
                            <button class="btn btn-lg btn-block" type="submit">Sign in</button>
                        </form>
                    </div>
                </div><!--Login Modal Body end-->

                <div class="modal-footer">
                    <a href="#forgotModal" role="button" data-toggle="modal">Forgot Password???</a> <br>
                    <a href="<?php echo base_url()?>index.php/login/loadSignUp" role="button" class="new" data-toggle="modal">New to Runathon SignUp Now</a>
                </div>
            </div><!--loginModal content end-->
        </div><!--Login Modal dialog end-->

    </div><!--end login Modal-->


    <div class="row" id="bigCallout">
        <div class="col-lg-8" id="maincontent">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3><?php echo $column_info->row()->header ?> <small class="pull-right"><i>posted by </i><?php echo $column_info->row()->name ?></small></h3>

                </div><!-- end panel header -->

                <div class="panel-body">

                    <p><?php echo $column_content ?></p>

                </div><!-- end panel body -->
                <?php if($column_info->row()->user_id != $this->session->userdata("session_name")){?>

                <div class="panel-footer">

                    <div class="alert alert-warning like-alert" role="alert">
                    </div>
                    <button type="button" class="main btn" id="like_btn">
                        <?php if(isset($like) && $like){?>
                            <span class=" glyphicon glyphicon-thumbs-down"></span>&nbsp;
                    <?php }
                        else{?>
                            <span class=" glyphicon glyphicon-thumbs-up"></span>&nbsp;
                        <?php }?>
                        <span class="badge like_count"><?php if($column_info->row()->like_count == null) echo 0; else echo $column_info->row()->like_count; ?></span>
                    </button>
                </div><?php }?>
            </div><!--end panel-->
        <div class="panel panel-default">
                <div class="panel-body">

                    <div class="alert alert-warning comment-alert" role="alert">
                    </div>

                    <div class="form-group">
                        <h4>Comment</h4>
                            <textarea class="form-control input-lg" id="comment_content" maxlength="140" style="resize:none"><?php //if($user==false) echo "tweet to @".$handle?></textarea>
                    </div>
                    <button type="button" class="main btn" id="comment_btn">
                        <span class="glyphicon glyphicon-comment"></span> Comment
                    </button>
                </div>

