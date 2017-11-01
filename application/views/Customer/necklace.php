<?php $page='ring'; include 'header.php'; ?>

<h1>Necklaces</h1><br>

<?php if ($this->session->flashdata('message')){
    echo "<h3>".$this->session->flashdata('message')."</h3>";
}
?>

<div class=" col-md-9 col-lg-9 ">
    <table class="table table-user-information" align="center">
        <tbody>

        <tr><?php foreach ($data as $row){ ?>
                <td>
                    <img  src="<?php echo base_url()."image/"; ?><?php  echo  $row['image'];?>" alt="necklaceImage" height="200" width="200">
                    <br> Title: <?php echo $row['title'];?> <br>
                    About: <?php echo $row['description'];?> <br>
                    Price: <?php echo $row['price'];?><br>
                    <a href="#" class="btn btn-success">Pay Online</a><br>
                    <?php if($this->session->userdata('id')==1){ ?>
                        <a href="<?php echo base_url('index.php/Admin/editNecklacePost/'.$row['necklaceId'])?>"  class="btn btn-info">Edit</a>
                    <a href="<?php echo base_url('index.php/Admin/deleteNecklace/'.$row['necklaceId'])?>"  onclick="return confirm('Are You Sure ' +
                         'You Want To Delete Student..!');" class="btn btn-danger">Delete</a><?php }?>
                </td>
            <?php }
            ?>
        </tr>

        </tbody>
    </table>

    <?php unset(
        $_SESSION['message']
    );?>












    <?php include 'footer.php';?>
