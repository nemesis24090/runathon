<?php
/**
 * Created by PhpStorm.
 * User: sagar
 * Date: 15/8/14
 * Time: 6:58 PM
 */ ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Runathon</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/style.css" />
</head>


<body id="homepage">

    <div class="navbar navbar-inverse navbar-fixed-top " rol="navigation">

            <a class="navbar-brand" href="">Runathon</a>

        <div class="nav-collapse navHeaderCollapse" id="navHeaderCollapse">
        <ul class="nav nav-pills navbar-right">
                    <li ><a href="<?php echo base_url()?>index.php/login">Home</a></li>
                    <li><a href="">Events</a></li>
                    <li><a href="">Columns</a></li>
                    <li><a href="">Contact Us</a></li>
                    <?php if($logged_in=="failure"){?>
                    <li><a href="#loginModal" data-toggle="modal">Login</a></li>
                    <?php }
                    else {?>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> My Account
                            <strong class="caret"></strong></strong></a>
                        <ul class="dropdown-menu">
                            <li><a href=""><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                            <li><a href=""><span class="glyphicon glyphicon-wrench"></span> My Settings</a></li>
                            <li><a href="<?php echo base_url()?>index.php/home/logOut"><span class="glyphicon glyphicon-off"></span> Sign Out</a></li>
                        </ul><!--end dropdown-->
                    </li><?php }?>
                </ul>
            </div><!--end navHeaderCollapse collapse-->
        <i class="icon"></i>
        <!--end navbar container-->
    </div><!--end navbar -->
