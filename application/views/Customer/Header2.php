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
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">

    <style>
        <?php switch($page){
            case 'home': ?>
        header{
            background-image: url("<?php echo base_url()."image/slide123.jpg";?>");
            width: 100%;
            height: 500px;
            background-position: 100%;
        }

        h1{
            font-size: 500%;
            font-style: italic;
            color: #999988;
            text-align: center;

        }
        <?php
        break;
        case 'about': ?>
        header{
            background-image: url("<?php echo base_url()."image/slide11.jpg";?>");
            width: 100%;
            height: 500px;
            background-position: 100%;
        }
        <?php
        break;
        case 'contact':?>
        header{
            background-image: url("<?php echo base_url()."image/slide12.jpg";?>");
            width: 100%;
            height: 500px;
            background-position: 100%;
        }
        <?php break; }?>
         header h2{
             font-size: 300%;
             font-style: italic;
             color: #999988;
             text-align: center;
         }

        h2{
            color: #1f1d1d;
        }

        body{
            color: #4F5155;
        }

        ul li:hover ul li{
            background-color: #4F5155;
        }


    </style>


</head>
<body>
<header>
<nav class="navbar navbar-inverse">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="<?php if ($page=='ring'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Customer/viewPost')?>">SHOPPING</a>
                <ul>
                    <li><a class="navbar-brand" href="<?php echo base_url('index.php/Customer/postRing')?>">Rings</a></li>
                    <li><a class="navbar-brand" href="<?php echo base_url('index.php/Customer/postNecklace')?>">Necklaces</a></li>
                    <li><a class="navbar-brand" href="<?php echo base_url('index.php/Customer/postEarring')?>">Earrings</a></li>
                </ul>
            </li>
            <?php if ($this->session->userdata('id')==1){?>
                <li class="<?php if ($page=='add'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Admin/addPost')?>">PUBLISH</a></li>
            <?php } ?>
            <li class="<?php if ($page=='home'){echo 'active';}?>"><a href="<?php echo base_url('index.php/Customer/index')?>">HOME</a></li>
            <li class="<?php if ($page=='about'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Customer/about')?>">ABOUT US</a></li>
            <li class="<?php if ($page=='contact'){echo 'active';} ?>"><a href="<?php echo base_url('index.php/Customer/contact')?>">CONTACT US</a></li>
            <li class="<?php if ($page=='profile'){echo 'active';} ?>"><a href="#"><?php echo $this->session->userdata('firstName')." "?>(Logging)</a>
                <ul>
                    <li><a class="navbar-brand" href="<?php echo base_url('index.php/Login/viewProfile');?>">View Profile</a></li>
                    <li><a class="navbar-brand" href="<?php echo base_url('index.php/Login/logoutUser');?>">Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>

</nav>

    <?php if ($page=='home'){?>

        <br><h1>NOVEL <br>
            <div class="container">
                JEWELLERS
            </div>
            <div class="container">
                <a href="<?php echo base_url('index.php/Customer/postRing')?>" class="btn btn-warning btn-lg active ">SHOP WITH US</a>
            </div>


        </h1>
    <?php }else{?>
</header>
<?php }?>


