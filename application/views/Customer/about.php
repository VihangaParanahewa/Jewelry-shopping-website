<?php $page='about'; include 'header2.php'; ?>

<div class="container">

    <div class="row">
        <div class="col-sm-8">
            <h2 class="mt-4">About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
            <p>
                <a class="btn btn-warning btn-lg active" href="<?php echo base_url('index.php/Customer/postRing')?>">BUY NOW &raquo;</a>
            </p>
        </div>
    </div>

    <div class=" col-md-9 col-lg-12 ">
        <table class="table table-user-information" align="center">
            <tbody>


            <tr>
                <td>
                    <img  src="<?php echo base_url()."image/earring112.jpg";?>" alt="earringImage" height="250" width="300">
                    <br> <h2>Earring </h2><br>
                    <a href="<?php echo base_url('index.php/Customer/postEarring')?>" class="btn btn-warning active">Pay Online</a><br>
                </td>
                <td>
                    <img  src="<?php echo base_url()."image/necklace111.jpg";?>" alt="necklaceImage" height="300" width="300">
                    <br> <h2>Necklace </h2><br>
                    <a href="<?php echo base_url('index.php/Customer/postNecklace')?>" class="btn btn-warning active">Pay Online</a><br>
                </td>

                <td>
                    <img  src="<?php echo base_url()."image/ring111.png";?>" alt="ringImage" height="300" width="400">
                    <br> <h2>Ring </h2><br>
                    <a href="<?php echo base_url('index.php/Customer/postRing')?>" class="btn btn-warning active">Pay Online</a><br>
                </td>
            </tr>


            </tbody>
        </table>
    </div>
</div>


<?php include 'footer.php';?>
