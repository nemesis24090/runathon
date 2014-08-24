<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 24/8/14
 * Time: 2:50 PM
 */ ?>

<div class="container" id="main">

    <div class="row" id="bigCallout">
        <div class="col-lg-8" id="maincontent">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="panel-header">
                        <h3><?php echo $column_info->row()->header ?> <small class="pull-right"><i>posted by </i><?php echo $column_info->row()->username ?></small></h3>

                    </div><!-- end panel header -->
                    <p><?php echo $column_content ?></p>

                </div><!-- end panel body -->
            </div><!--end panel-->
        </div><!--end maincontent-->