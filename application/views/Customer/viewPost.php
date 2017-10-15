<?php include 'header.php'; ?>


<?php if ($this->session->flashdata('message')){
    echo "<h3>".$this->session->flashdata('message')."</h3>";
}
?>






<?php unset(
    $_SESSION['message']
);?>


<?php include 'footer.php';?>
