<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/9/14
 * Time: 6:10 PM
 */ ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/myscript.js"></script>


<script type="text/javascript">
    var base_url="<?php echo base_url() ?>";
    var base_url="<?php echo base_url() ?>";

    <?php if(isset($event_info)){ ?>
    var isset_event=true;
    var event_id=<?php echo $event_id?>;
    <?php }
    else {?>
    var isset_event=false;
    <?php } ?>

    <?php if(($this->session->userdata("session_name") && $this->session->userdata("session_id"))){ ?>
    var isset_session=true;
    var session_name="<?php echo $this->session->userdata("session_name") ?>";
    var profile_pic="<?php echo $this->session->userdata("profile_pic") ?>";
    var user_name="<?php echo $this->session->userdata("user_name") ?>";
    <?php }
    else {?>
    var isset_session=false;
    <?php } ?>
</script>

<script type="text/javascript" src="<?php echo base_url()?>js/eventmain.js"></script>


</body>

</html>