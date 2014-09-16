<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/9/14
 * Time: 5:24 PM
 */ ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/myscript.js"></script>
<script src="<?php echo base_url()?>js/moment.min.js"></script>
<script src="<?php echo base_url()?>js/livestamp.min.js"></script>

<script type="text/javascript">
    var base_url="<?php echo base_url() ?>";

    <?php if(isset($column_id)){ ?>
        var isset_column=true;
        var column_id=<?php echo $column_id?>;
    <?php }
    else {?>
    var isset_column=false;
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

<script type="text/javascript" src="<?php echo base_url()?>js/column.js"></script>

</body>

</html>