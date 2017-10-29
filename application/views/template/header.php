<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novel Online Jewellery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body{

            background-size: 1920px 800px;
        }

    </style>

</head>

<body background="<?php echo base_url()."image/jewelry3.jpg";?>" >
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
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
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

