<?php
if (!($this->session->userdata('logged_in'))){
    redirect('Home/login');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url('image/NJ.jpg');?>">
    <title><?php echo $this->session->userdata('firstName')." ".$this->session->userdata('lastName') ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
    <style>
        table{
            color: ThreeDHighlight;
        }
        h3{
            color: ThreeDLightShadow;
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
    </style>


</head>
<body background="<?php echo base_url()."image/bg2.jpg";?>" >
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="<?php if ($page=='ring'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Customer/viewPost')?>">SHOPPING</a>
                    <ul>
                        <li><a class="navbar-brand" href="<?php echo base_url('index.php/Customer/postRing')?>">Rings</a></li>
                        <li><a class="navbar-brand" href="<?php echo base_url('index.php/Customer/postNecklace')?>">Necklaces</a></li>
                        <li><a class="navbar-brand" href="<?php echo base_url('index.php/Customer/postEarring')?>">Earrings</a></li>
                    </ul>
                </li>
                <?php if ($this->session->userdata('type')=='Admin'){?>
                    <li class="<?php if ($page=='add'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Admin/addPost')?>">PUBLISH</a></li>
                    <li class="<?php if ($page=='operations'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Admin/operations')?>">OPERATIONS</a></li>
                <?php } ?>
                <li class="<?php if ($page=='home'){echo 'active';}?>"><a href="<?php echo base_url('index.php/Customer/index')?>">HOME</a></li>
                <li class="<?php if ($page=='about'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Customer/about')?>">ABOUT US</a></li>
                <li class="<?php if ($page=='contact'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Customer/contact')?>">CONTACT US</a></li>
                <li class="<?php if ($page=='profile'){echo 'active';} ?>"><a href="#"><?php echo $this->session->userdata('firstName')." (".$this->session->userdata('type').")";?></a>
                    <ul>
                        <li><a class="navbar-brand" href="<?php echo base_url('index.php/Login/viewProfile');?>">View Profile</a></li>
                        <li><a class="navbar-brand" href="<?php echo base_url('index.php/Login/logoutUser');?>">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>

</nav>


