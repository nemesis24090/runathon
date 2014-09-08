<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 30/8/14
 * Time: 12:04 AM
 */ ?>
<div class="panel-body comment-list-panel">
    <?php if($comments){?>
    <?php foreach ($comments as $row){?>
    <div class="media">
        <a class="pull-left" href="">
            <?php if($row->profilepic == null)
                    $profile_pic= base_url()."profile_pic/profile_default.png";
                  else
                    $profile_pic=base_url()."profile_pic/".$row->profilepic;
            ?>
            <img class="media-object img-circle comment-img" src="<?php echo $profile_pic ?>" alt="">
        </a>
        <div class="media-body">
            <h4 class="media-heading"><?php echo $row->name ?></h4>
            <?php echo $row->content ?>
        </div>
    </div><?php
        }
    }
    else{
    ?>
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading">No Comments made</h4>
            </div>
        </div>
    <?php }?>
</div>
</div>
</div><!--end maincontent-->