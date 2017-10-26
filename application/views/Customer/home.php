<?php include 'header.php'; ?>
<div class="container">
    <h1>Home</h1>
    <hr>

<?php if ($this->session->flashdata('message')){
    echo "<h3>".$this->session->flashdata('message').$this->session->userdata('firstName')."</h3>";
}
?>

</div>




<?php unset(
    $_SESSION['message']
);?>


<?php include 'footer.php';?>
