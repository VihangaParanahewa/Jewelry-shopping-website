<?php $page='home'; include 'header.php'; ?>
<div class="container">
    <h1>NOVEL ONLINE JEWELLERY </h1>
    <hr>

<?php if ($this->session->flashdata('message')){
    echo "<h3>".$this->session->flashdata('message').$this->session->userdata('firstName')."</h3>";
}
?>


<div class=" col-md-9 col-lg-9 ">
    <table  class="table table-user-information" align="center">
        <tbody>
        <tr>
            <td><img  src="<?php echo base_url()."image/ring.jpg";?>"  alt="ringImage" height="250" width="250"></td>
            <td><img  src="<?php echo base_url()."image/necklace.jpg";?>"  alt="ringImage" height="250" width="250"></td>
            <td><img  src="<?php echo base_url()."image/jewelry2.jpg";?>"  alt="ringImage" height="250" width="500"></td>
        </tr>
        <tr>
            <td><img  src="<?php echo base_url()."image/diamond-choker-necklace-rhinestone-necklace.jpg";?>"  alt="ringImage" height="250" width="250"></td>
            <td><img  src="<?php echo base_url()."image/f0dea11ed1c965e5db801ccb16d03cb3--ear-cuff-earrings-pink-earrings.jpg";?>"  alt="ringImage" height="250" width="250"></td>
            <td><img  src="<?php echo base_url()."image/cover1.jpg";?>"  alt="ringImage" height="250" width="500"></td>
        </tr>


        </tbody>
    </table>


</div>
</div>
<?php unset(
    $_SESSION['message']
);?>


<?php include 'footer.php';?>
