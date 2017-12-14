<?php $page='ring'; include 'header.php'; ?>
<br><br>
<div class="container">
<h1>Necklaces</h1><br>

<?php if ($this->session->flashdata('message')){
    echo "<h3>".$this->session->flashdata('message')."</h3>";
}
?>

<div class=" col-md-9 col-lg-12 ">
    <table class="table table-user-information" align="center">
        <tbody>

        <?php $count=0; foreach ($data as $row){
            if($count==0){?>
                <tr> <?php }?>
                <td>
                    <img  src="<?php echo base_url()."image/"; ?><?php  echo  $row['image'];?>" alt="necklaceImage" height="300" width="300">
                    <br> Title: <?php echo $row['title'];?> <br>
                    About: <?php echo $row['description'];?> <br>
                    Price: <?php echo $row['price'];?><br>
                    <a href="#" class="btn btn-success">Pay Online</a><br>
                    <?php if($this->session->userdata('type')=='Admin'){ ?>
                        <a href="<?php echo base_url('index.php/Admin/editNecklacePost/'.$row['necklaceId'])?>"  class="btn btn-info">Edit</a>
                    <a href="<?php echo base_url('index.php/Admin/deleteNecklace/'.$row['necklaceId'])?>"  onclick="return confirm('Are You Sure ' +
                         'You Want To Delete Student..!');" class="btn btn-danger">Delete</a><?php }?>
                </td>
            <?php $count++; if ($count%3==0){?>
                </tr><?php }}
            ?>

        </tbody>
    </table>

    <?php unset(
        $_SESSION['message']
    );?>
</div>

    <?php include 'footer.php';?>
