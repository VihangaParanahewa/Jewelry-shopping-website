<?php $page='operations'; include dirname(__FILE__).'./../Customer/header.php'; ?>
<br><br>
<div class="container">
    <h1>ONLINE USERS
        &nbsp&nbsp<a href="<?php echo base_url('index.php/Admin/operations')?>" class="btn btn-warning active">BACK</a>
    </h1>
    <hr>

    <?php
    if ($this->session->flashdata('message')){
        echo "<h3>".$this->session->flashdata('message')."</h3>";
    }
    ?>


    <div class=" col-md-9 col-lg-9 ">
        <table class="table table-user-information" align="center">
            <tbody>
            <?php foreach ($data as $row){ ?>
            <h3>
                <tr>
                    <td><?php echo ($row['firstName']." ".$row['lastName']);?></td>
                    <td><?php echo $row['type']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td><button type="button" class="btn btn-success btn-circle"></button></td>
                </tr>
                <?PHP } ?>
            </h3>

            </tbody>
        </table>

    </div>
</div>

<?php unset(
    $_SESSION['message']
);?>


<?php include dirname(__FILE__).'./../Customer/footer.php';?>
