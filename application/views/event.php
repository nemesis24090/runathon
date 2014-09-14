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
                <br><br>
                </div><!--panel-header end-->
                 <div class="panel-info">
                 </div><!--panel-info ends-->
                 <div class="panel-group">
                     <form class="form-horizontal">
                         <div class="form-group">
                             <div class="col-lg-8">
                                 <input class="form-control" id="inputName"  type="text" />
                             </div>
                             <div class="col-lg-4">
                                 <a class="btn btn-danger" href="#"><span class="glyphicon glyphicon-search"></span> Search</a>
                             </div>
                         </div><!--end form group-->
                     </form>
                     <div class="pull-right">
                         <a class="" href="#"> View <span class="glyphicon glyphicon-th-list"></span></a>
                         <a class="" href="#"> Filter <span class="glyphicon glyphicon-chevron-down"></span></a>
                     </div>
                 </div><!-- panel group ends-->
                 <div class="search-result">
                 <?php foreach($event_info as $row) {?>
                    <div class="panel-group" id="result">
                        <br><hr>
                        <div class="panel-info col-lg-3">
                            <img src="http://placehold.it/140" class="thumbnail pull-left"/>
                        </div>
                        <div class="panel-body col-lg-9">
                            <div class="date pull-right"><small><?php echo $row->timestamp ?></small></div>
                            <div style="margin-top:2%"><large><a href="<?php echo base_url()?>index.php/event/viewEvent/<?php echo $row->event_id?>"><?php echo $row->header ?></a></large></h6><br><small> &nbsp;<?php echo $row->location ?></small></div>

                            <br>
                            <div class="">
                                <p> &nbsp;&nbsp; &nbsp;&nbsp;
                                    <?php echo $row->description ?>
                                </p>
                            </div>

                        </div>
                        <div class="commentreleatedbuttons">
                            <a class=""><span class="glyphicon glyphicon-heart-empty"></span><small>&nbsp;<?php echo $row->likes ?></small></a>
                            &nbsp;<a class=""><span class="glyphicon glyphicon-comment"></span><small>&nbsp;&nbsp;<?php echo $row->comments ?></small></a>
                            &nbsp;<a class=""><span class="glyphicon glyphicon-share"></span><small>&nbsp;&nbsp;21</small></a>
                        </div><!--commentrelatedbuttons ends-->
                    </div><!--result ends-->
                     <?php }?>
                 </div><!--search result ends-->
                </div><!-- end panel body -->
            </div><!--end panel-->
        </div><!--end maincontent-->


