<?php $page='message'; include 'header.php'; ?>


<h1>Message Box <br></h1>


<?php if ($this->session->flashdata('message')){
    echo "<h3>".$this->session->flashdata('message')."</h3>";
}
?>






<?php unset(
    $_SESSION['message']
);?>


<?php include 'footer.php';?>
