<div class="container" id="main">
    <div class="modal fade" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">CONNECT WITH US</h4>
                </div><!--login Modal Header end-->
                <div class="modal-body">
                    <!--Login Screen-->
                    <div class="login_screen">
                        <a href="#" class="btn btn-large btn-primary">Connect with Facebook</a><br><br>
                        <a href="#" class="btn btn-large btn-danger">Connect with Google +</a><br><br>
                        <div class="text-muted">
                            <span>Or use your Email address</span>
                        </div><br>
                        <div class="">
                            <button href="#" id="login_form" class="btn btn-danger">LOGIN</button>
                            <button href="#" id="register_form" class="btn btn-default">SIGN UP</button>
                        </div>
                    </div><!--Login-Screen ends

                    <!-- Username & Password Login form -->
                    <div class="user_login">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label class="" for="inputEmail">Email ID/ Username</label>
                                </div>
                                <div class="col-lg-12">
                                    <input class="form-control" id="inputEmail"  type="text" />
                                </div>
                            </div><!--end form group-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label class="" for="inputPassword">Password</label>
                                </div>
                                <div class="col-lg-12">
                                    <input class="form-control" id="inputPassword"  type="password" />
                                </div>
                            </div><!--end form group-->
                            <div class="form-group">
                                 <div class="col-lg-12">
                                     <input id="remember" type="checkbox" />
                                     <label for="remember" class="text-muted">Remember me on this computer</label>
                                 </div>


                            </div><!--end form group-->
                            <div class="action_btns">
                                <button href="#" id="backConnect" class="btn btn-default"> BACK</button>
                                <button href="#" class="btn btn-danger">LOGIN</button>
                            </div>

                        </form>

                        <a href="#" class="">Forgot password?</a>
                    </div><!--user_login ends-->

                    <!-- Register Form -->
                    <div class="user_register">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label class="" for="inputName">Full Name</label>
                                </div>
                                <div class="col-lg-12">
                                    <input class="form-control" id="inputName"  type="text" />
                                </div>
                            </div><!--end form group-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label class="" for="inputEmail">Email Address</label>
                                </div>
                                <div class="col-lg-12">
                                    <input class="form-control" id="inputEmail"  type="text" />
                                </div>
                            </div><!--end form group-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label class="" for="inputPassword">Password</label>
                                </div>
                                <div class="col-lg-12">
                                    <input class="form-control" id="inputPassword"  type="password" />
                                </div>
                            </div><!--end form group-->
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input id="remember" type="checkbox" />
                                    <label for="remember" class="text-muted">Send Occasional Updates</label>
                                </div>
                                </div><!--end form group-->
                            <div class="action_btns">
                                <button href="#" id="backConnect" class="btn btn-default"> BACK</button>
                                    <button href="#" class="btn btn-danger">REGISTER</button>
                            </div>

                            <!--<div class="modal-footer">
                                <button href="#" id="backConnect" class="btn btn-default"> Back</button>
                                <button href="#" class="btn btn-danger">Register</button>
                            </div>-->

                        </form>

                    </div><!--user_register ends-->
                </div><!--Login Modal Body end-->
            </div><!--loginModal content end-->
        </div><!--Login Modal dialog end-->

    </div><!--end login Modal-->

    <div class="row" id="bigCallout" style="margin-top:3%;">
        <div class="col-lg-8" id="maincontent">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class="panel-header">
                   <h1><?php echo $event_info->header ?></h1>
                </div><!--panel-header end-->
                 <div class="panel-info">
                    <small class="pull-right"><?php echo $event_info->total_comments ?> reviews/<?php echo $event_info->rating ?> rating</small>
                    <p><?php echo $event_info->location ?></p><hr>
                    <p><strong>Type of Marathons :</strong> <?php echo $event_info->events ?></p>
                    <p><strong>Main Organiser : </strong>Standard Charter Group</p>

                 </div><!--panel-info ends-->
                 <div class="panel-group">
                     <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">INFO</a></li>
                            <li class=""><a href="#tab2" data-toggle="tab">PHOTOS</a></li>
                            <li class=""><a href="#tab3" data-toggle="tab">MAPS</a></li>
                            <li class=""><a href="#tab4" data-toggle="tab" >REVIEWS</a></li>
                            <li class=""><a href="#tab5" data-toggle="tab">REGISTER</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1"><br>
                            <p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p><?php echo $event_content ?></p>
                            </div><!--tab1 ends-->
                            <div class="tab-pane" id="tab2"><br>
                                <img src="http://placehold.it/140" class="thumbnail">
                            </div><!--tab2 ends-->
                            <div class="tab-pane" id="tab3"><br>
                                <h4>Route :</h4>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m27!1m12!1m3!1d60366.948850364286!2d72.80901616558026!3d18.978508603298827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m12!1i0!3e6!4m5!1s0x3be7cedb0ea0cd0f%3A0x428a465039995bd0!2sDadar%2C+Mumbai%2C+Maharashtra%2C+India!3m2!1d19.017979999999998!2d72.844763!4m3!3m2!1d18.93973!2d72.836202!5e0!3m2!1sen!2sin!4v1408800860194" width="100%" height="600" frameborder="0" style="border:0"></iframe>
                            </div><!--tab3 ends-->
                            <div class="tab-pane " id="tab4"><br>
                                <div class="">
                                    <?php
                                    $event_id= $event_info->event_id?>
                                    <form class="form-group">
                                        <div class="alert alert-warning comment-alert" role="alert">
                                        </div>
                                       <textarea type="text" id="review_content" style="width:100%;height:100px;" placeholder="ENTER YOUR COMMENT"></textarea><br/>
                                        <a><span class="glyphicon glyphicon-star-empty small"/></a>
                                        <a><span class="glyphicon glyphicon-star-empty small"/></a>
                                        <a><span class="glyphicon glyphicon-star-empty"/></a>
                                        <a><span class="glyphicon glyphicon-star-empty"/></a>
                                        <a><span class="glyphicon glyphicon-star-empty "/></a>
                                    <button class="btn btn-danger pull-right" id="review_submitbtn" style="margin-top:1%;">SUBMIT</button>
                                    </form>
                                </div>

                                <div class="panel-group comment-list-panel">
                                  <br>
                                    <?php if($reviews_info){?>
                                    <?php foreach($reviews_info as $row) {?>
                                        <hr>
                                        <?php if($row->profilepic == null)
                                            $profile_pic= base_url()."profile_pic/profile_default.png";
                                        else
                                            $profile_pic=base_url()."profile_pic/".$row->profilepic;
                                        ?>
                                    <img src="<?php echo $profile_pic ?>" class="img-circle pull-left comment-img"/>
                                    <div style="margin-top:2%"><a href="" > &nbsp;&nbsp;<?php echo $row->name?></a>
                                       <small class="pull-right"><?php echo $row->rating ?> / 5</small>
                                        <br><small> &nbsp;&nbsp;<?php echo $row->timestamp ?></small></div><br>
                                    <div class="panel-body">
                                     <p><?php echo $row->content ?></p>
                                        <div class="commentreleatedbuttons">
                                            <a class=""><span class="glyphicon glyphicon-heart-empty"></span><small>&nbsp;21</small></a>
                                            &nbsp;<a class=""><span class="glyphicon glyphicon-comment"></span><small>&nbsp;&nbsp;21</small></a>
                                        </div><!--commentrelatedbuttons ends-->
                                    </div>
                                    <?php }?>
                                    <?php }
                                    else{?>
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="media-heading">Be the First Person to Comment</h4>
                                            </div>
                                        </div>
                                     <?php }?>
                                </div><!--panel-group ends-->




                            </div><!--tab4 reviews ends-->
                            <div class="tab-pane" id="tab5"><br>
                            </div><!--tab5 ends-->
                        </div><!--tab content ends-->
                     </div><!--tabbable ends-->

                 </div><!-- panel group ends-->
                </div><!-- end panel body -->
            </div><!--end panel-->
        </div><!--end maincontent-->


