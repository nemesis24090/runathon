<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 15/8/14
 * Time: 8:14 PM
 */?>

<div class="col-lg-4" id="sidebar">
    <div id="topsidebar">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="panel-header">
                    <h3>Upcoming Events</h3>
                </div>
                <?php foreach($upcoming_events as $row) {?>
                    <a href="<?php base_url()?>index.php/home/viewColumn/<?php echo $row->event_id?>"><?php echo $row->header ?></a><br/>
                <?php }?>
            </div>
        </div>

    </div><!--end topsidebar-->

    <div id="middlesidebar">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="panel-header">
                    <h3>Famous Columns</h3>
                </div>
                <?php foreach($famous_columns as $row) {?>
                    <a href="<?php base_url()?>index.php/home/viewColumn/<?php echo $row->column_id?>"><?php echo $row->header ?></a><br/>
                <?php }?>
            </div><!-- end panel body -->
        </div><!-- end panel-->

    </div><!--end middlesidebar-->

    <div id="bottomsidebar">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="panel-header">
                    <h3>Adversitement</h3>
                </div>
                <p>This place is reversed for ads in future</p>

            </div><!-- end panel body -->
        </div><!-- end panel-->

    </div><!--end middlesidebar-->
</div>

</div><!--end bigCallout -->

</div><!--end container -->
