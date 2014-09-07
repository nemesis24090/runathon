<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 7/9/14
 * Time: 11:38 AM
 */ ?>

<div class="container container_edit">
    <div class="row clearfix">
        <div class="col-md-2 column">
        </div>
        <div class="col-md-4 column">
            <div class="row clearfix">
                <div class="col-md-12 column">



                    <form class="login_form" action="<?php echo base_url()?>index.php/login/submitLogin" method="post">
                        <?php if(isset($login_failure)){ ?>
                            <div class="authentication_error alert-danger" role="alert"><?php echo $message?></div><br>
                        <?php } ?>
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
                        <button class="btn btn-lg btn-block" type="submit">Sign in</button><br>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-6 column">
        </div>
    </div>
</div>