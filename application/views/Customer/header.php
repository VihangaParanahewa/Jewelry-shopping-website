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
    <title><?php echo $this->session->userdata('firstName')." ".$this->session->userdata('lastName') ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url('index.php/Admin/addPost')?>">ADD POST</a></li>
                <li><a href="<?php echo base_url('index.php/Customer/viewPost')?>">VIEW POST</a></li>
            </ul>



            <ul class="nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('firstName') ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('index.php/Login/viewProfile');?>">Profile</a></li>
                        <li><a href="<?php echo base_url('index.php/Login/logoutUser');?>">Log Out</a></li>

                    </ul>
        </div>
    </div>
</nav>

<ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
    <li><a href="#">Regular link</a></li>
    <li class="disabled"><a href="#">Disabled link</a></li>
    <li><a href="#">Another link</a></li>
</ul>


<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('index.php/Customer/ring')?>">Ring</a>
        <a class="navbar-brand" href="<?php echo base_url('index.php/Customer/necklace')?>">Necklace</a>
        <a class="navbar-brand" href="<?php echo base_url('index.php/Customer/earring')?>">Earring</a>
    </div>
</nav>
