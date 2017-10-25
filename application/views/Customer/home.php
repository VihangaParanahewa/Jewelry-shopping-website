<?php include 'header.php'; ?>

<?php if ($this->session->flashdata('message')){
    echo "<h3>".$this->session->flashdata('message').$this->session->userdata('firstName')."</h3>";
}
?>



<h1>Home Posts</h1>


<?php unset(
    $_SESSION['message']
);?>


<?php include 'footer.php';?>
