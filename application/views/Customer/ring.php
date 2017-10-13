<?php include 'header.php'; ?>

<h1>Rings</h1>

<?php if ($this->session->flashdata('message')){
    echo "<h3>".$this->session->flashdata('message')."</h3>";
}
?>


<div class=" col-md-9 col-lg-9 ">
    <table class="table table-user-information" align="center">
        <tbody>

        <tr>
            <td>Title</td>
            <td>Category</td>
            <td>Description</td>
            <td>Colour</td>
            <td>Price</td>
            <td>Image</td>
        </tr>

        <?php if($this->session->userdata('isDataOnRing')){
            foreach ($data as $row){ ?>
                <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td bgcolor="<?php  echo $row['colour'];?>"></td>
                    <td><?php echo $row['price'];?></td>
                    <td><img  src="<?php echo base_url()."image/"; ?><?php  echo  $row['image'];?>" alt="ringImage" height="75" width="100"></td>
                </tr>
            <?php }
        } ?>

        </tbody>
    </table>















<?php include 'footer.php';?>
