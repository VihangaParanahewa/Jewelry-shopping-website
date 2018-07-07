<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo base_url('image/NJ.jpg');?>">
    <title>Novel Jewellers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">

    <style>
        h3{
            color: #990000 ;
        }
    </style>

</head>

<body background="<?php echo base_url()."image/jewelry2.jpg";?>">

<nav class="navbar navbar-inverse">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="<?php if ($page=='home'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Home/index')?>">HOME</a></li>
            <li class="<?php if ($page=='about'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Home/about')?>">ABOUT US</a></li>
            <li class="<?php if ($page=='contact'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Home/contact')?>">CONTACT US</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="<?php if ($page=='login'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Home/login')?>">LOG IN</a></li>
            <li class="<?php if ($page=='registration'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Home/register')?>">REGISTER</a></li>
        </ul>
    </div>

</nav>




