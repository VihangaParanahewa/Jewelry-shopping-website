<?php include 'header.php'; ?>

<h1>Necklaces</h1>

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

        <?php foreach ($data as $row){ ?>
            <tr>
                <td><?php echo $row['title'];?></td>
                <td><?php echo $row['category'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['colour'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['image'];?></td>
            </tr>
        <?php }?>

        </tbody>
    </table>












<?php include 'footer.php';?>
