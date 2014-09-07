<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 24/8/14
 * Time: 2:16 PM
 */?>

<div class="container container_edit">
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


<div class="carousel slide" id="myCarousel">
    <!--Wrapper for slider-->
    <img src="<?php echo base_url() ?>img/run.jpg">
</div><!--end carousel -->

<div class="row" id="bigCallout">
    <div class="col-lg-8" id="maincontent">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="panel-header">
                    <h3 id>Inside Main Article <small class="pull-right"><i>posted by </i>Ashwin Shetty</small></h3>

                </div><!-- end panel header -->
                <p>Christian Vasile is an enthuziastic Romanian web designer currently living in Denmark.
He is passionate for the industry and writes about design, usability, coding and freelancing
and is a regular publisher here at 1WD. You can follow him on Twitter at @christianvasile
    or visit his web portfolio by clicking on the link above</p><br>
                <p>
Christian Vasile is an enthuziastic Romanian web designer currently living in Denmark.
He is passionate for the industry and writes about design, usability, coding and freelancing
and is a regular publisher here at 1WD. You can follow him on Twitter at @christianvasile
    or visit his web portfolio by clicking on the link above
<br>
                </p>
                <p>
Christian Vasile is an enthuziastic Romanian web designer currently living in Denmark.
He is passionate for the industry and writes about design, usability, coding and freelancing
and is a regular publisher here at 1WD. You can follow him on Twitter at @christianvasile
    or visit his web portfolio by clicking on the link above
<br>
                </p>
                <p>
Christian Vasile is an enthuziastic Romanian web designer currently living in Denmark.
He is passionate for the industry and writes about design, usability, coding and freelancing
and is a regular publisher here at 1WD. You can follow him on Twitter at @christianvasile
    or visit his web portfolio by clicking on the link above
<br>
                </p>                        <p>
Christian Vasile is an enthuziastic Romanian web designer currently living in Denmark.
He is passionate for the industry and writes about design, usability, coding and freelancing
and is a regular publisher here at 1WD. You can follow him on Twitter at @christianvasile
    or visit his web portfolio by clicking on the link above
<br>
                </p>
                </p>                        <p>
Christian Vasile is an enthuziastic Romanian web designer currently living in Denmark.
He is passionate for the industry and writes about design, usability, coding and freelancing
and is a regular publisher here at 1WD. You can follow him on Twitter at @christianvasile
    or visit his web portfolio by clicking on the link above
<br>
                </p>
                </p>                        <p>
Christian Vasile is an enthuziastic Romanian web designer currently living in Denmark.
He is passionate for the industry and writes about design, usability, coding and freelancing
and is a regular publisher here at 1WD. You can follow him on Twitter at @christianvasile
    or visit his web portfolio by clicking on the link above
<br>
                </p>                        </p>                        <p>
Christian Vasile is an enthuziastic Romanian web designer currently living in Denmark.
He is passionate for the industry and writes about design, usability, coding and freelancing
and is a regular publisher here at 1WD. You can follow him on Twitter at @christianvasile
    or visit his web portfolio by clicking on the link above
<br>
                </p>


            </div><!-- end panel body -->
        </div><!--end panel-->
    </div><!--end maincontent-->
