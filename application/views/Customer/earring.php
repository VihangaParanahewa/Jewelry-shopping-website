<?php include 'header.php'; ?>

<h1>Earrings</h1>

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
            <?php if($this->session->userdata('id')==1){ ?>
                <td>Action</td>
            <?php }?>
        </tr>

        <?php if ($this->session->userdata('isDataOnEarring')){
            foreach ($data as $row){ ?>
                <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td bgcolor="<?php echo $row['colour'];?>"></td>
                    <td><?php echo $row['price'];?></td>
                    <td><img  src="<?php echo base_url()."image/"; ?><?php  echo  $row['image'];?>" alt="earringImage" height="75" width="100"></td>

                    <?php if($this->session->userdata('id')==1){ ?>
                        <td>
                            <a href="<?php echo base_url('index.php/Admin/editEarringPost')?>" <?php $this->session->set_userdata($row); //create session ?> class="btn btn-info">Edit</a>
                            <a href="<?php echo base_url('index.php/Admin/deleteEarring/'.$row['earringId'])?>"  class="btn btn-danger">Delete</a>
                        </td>
                    <?php }?>

                </tr>
            <?php }
        }?>

        </tbody>
    </table>

    <?php unset($_SESSION['isDataOnEarring'],
        $_SESSION['message']
    );?>










<?php include 'footer.php';?>
