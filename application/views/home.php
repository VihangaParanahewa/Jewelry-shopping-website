<?php $page='home'; include 'template/header.php' ?>

    <div class="container">

        <div class="row">
            <div class="col-sm-8">
                <h2 class="mt-4">What We Do</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
                <p>
                    <a class="btn btn-primary btn-lg active" href="<?php echo base_url('index.php/Home/login')?>">SHOP NOW &raquo;</a>
                </p>
            </div>
            <div class="col-sm-4">
                <h2 class="mt-4">Contact Us</h2>
                <address>
                    <strong>Gayan Deshapriya Kodagoda</strong>
                    <br>No:42/2
                    <br>Court road,Homagama
                    <br>
                </address>
                <address>
                    <abbr title="Phone">Mobile:</abbr>
                    (077) 574-2760
                    <br>
                    <abbr title="Email">Email:</abbr>
                    <a href="mailto:#">gayandeshapriya@gmail.com</a>
                </address>
            </div>
        </div>

    <div class=" col-md-9 col-lg-12 ">
    <table class="table table-user-information" align="center">
        <tbody>


                <tr>
            <td>
                <img  src="<?php echo base_url()."image/adv21.jpg";?>" alt="earringImage" height="250" width="400">
                <br> <h2>Earring </h2><br>
                <a href="<?php echo base_url('index.php/Home/login')?>" class="btn btn-success active">Pay Online</a><br>
            </td>
                    <td>
                        <img  src="<?php echo base_url()."image/necklace.jpg";?>" alt="necklaceImage" height="300" width="300">
                        <br> <h2>Necklace </h2><br>
                        <a href="<?php echo base_url('index.php/Home/login')?>" class="btn btn-success active">Pay Online</a><br>
                    </td>

                    <td>
                        <img  src="<?php echo base_url()."image/ring11.jpg";?>" alt="ringImage" height="300" width="400">
                        <br> <h2>Ring </h2><br>
                        <a href="<?php echo base_url('index.php/Home/login')?>" class="btn btn-success active">Pay Online</a><br>
                    </td>
                </tr>


        </tbody>
    </table>
    </div>
    </div>


<?php include 'template/footer.php'?>