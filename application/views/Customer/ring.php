<?php $page='ring'; include 'header.php'; ?>
<br><br>
<div class="container">
<h1>Rings
    &nbsp&nbsp<a href="#" class="btn btn-info active" data-toggle="modal" data-target="#myModal">SEARCH</a>
</h1>
    <br>

<?php if ($this->session->flashdata('message')){
    echo "<h3>".$this->session->flashdata('message')."</h3>";
}
?>

<div class=" col-md-9 col-lg-12 ">
    <table class="table table-user-information" align="center">
        <tbody>

        <?php $count=0;if($data) {
            foreach ($data as $row) {
                if ($count == 0) {
                    ?>
                    <tr> <?php } ?>
                <td>
                    <img src="<?php echo base_url() . "image/"; ?><?php echo $row['image']; ?>" alt="necklaceImage"
                         height="300" width="300">
                    <br> Title: <?php echo $row['title']; ?> <br>
                    About: <?php echo $row['description']; ?> <br>
                    Price: <?php echo $row['price']; ?><br>
                    <a href="#" class="btn btn-success">Pay Online</a><br>
                    <?php if ($this->session->userdata('type') == 'Admin') { ?>
                        <a href="<?php echo base_url('index.php/Admin/editRingPost/' . $row['ringId']); ?>"
                           class="btn btn-info">Edit</a>
                    <a href="<?php echo base_url('index.php/Admin/deleteRing/' . $row['ringId']) ?>" onclick="return confirm('Are You Sure ' +
                         'You Want To Delete Student..!');" class="btn btn-danger">Delete</a><?php } ?>
                </td>
                <?php $count++;
                if ($count % 3 == 0) { ?>
                    </tr><?php }
            }
        }
        ?>

        </tbody>
    </table>
</div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Search</h4>
                </div>
                <div class="modal-body">
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('Search/searchRing');?>
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label for="exampleInputSearchBy1">Search By</label>&nbsp
                            <select class="selectpicker" name="category">
                                <option value="price">Price</option>
                            </select>
                            <select class="selectpicker" name="symbol">
                                <option value="=">=</option>
                                <option value=">">></option>
                                <option value="<"><</option>
                            </select>
                            <input type="number" class="form-control" id="search" placeholder="Search Here" name="search">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-danger" name="submit" value="Confirm">Search Now</button>

                    <?php echo form_close(); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


</div>

<?php unset(
    $_SESSION['message']
);?>

<?php include 'footer.php';?>
