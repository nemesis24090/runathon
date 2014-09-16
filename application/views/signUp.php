<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 31/8/14
 * Time: 11:13 AM
 */ ?>

<div class="container container_edit">
    <div class="row clearfix">
        <div class="col-md-2 column">
        </div>
        <div class="col-md-8 column">

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
                                        <input type="text" class="form-control" id="userid" placeholder="Email id" name="user_id" value="<?php echo set_value('user'); ?>">
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

            <div class="panel panel-default">
                <div class="panel-heading">Sign Up Form</div>


                <div class="panel-body">
                    <?php if(isset($alert)) {?>
                    <div class="alert alert-danger" role="alert"><?php echo $alert ?></div>
                    <?php }
                    if(isset($success)){?>
                    <div class="alert alert-success" role="alert"><?php echo $success."Go To " ?><a href="<?php echo base_url()?>index.php/login" class="alert-link">Login Page</a></div>
                    <?php }?>
                    <form class="sign_form" method="post" action="<?php echo base_url()?>index.php/login/submitSignUp">
                    Full Name : <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name"/>
                        <span class="name_sign alert-danger"><?php if(isset($name))echo $name; ?></span><br>
                    Email : <input type="email" id="email" name="email" class="form-control" placeholder="Email id"/>
                        <span class="email_sign alert-danger"><?php if(isset($email))echo $email; ?></span><br>
                    Password : <span class="pass-score"></span><input type="password" id="pass" name="password" class="form-control" placeholder="Password"/>
                        <span class="password_sign alert-danger"><?php if(isset($password))echo $password; ?></span><br>
                    Confirm Password : <input type="password" id="confpass" name="confpass" class="form-control" placeholder="Retype Password"/>
                        <span class="confpass_sign alert-danger"><?php if(isset($confpass))echo $confpass; ?></span><br>
                    Gender : <select name="gender" class="form-control">
                        <option class="form-control">Male</option>
                        <option class="form-control">Female</option>
                    </select><br>
                    <button class="btn btn-lg btn-block" type="submit">Sign in</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-2 column">
        </div>
    </div>
</div>