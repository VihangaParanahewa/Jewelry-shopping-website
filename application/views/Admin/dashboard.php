<?php include 'header.php'; ?>



    <?php if ($this->session->flashdata('message')){
        echo "<h3>".$this->session->flashdata('message').$this->session->userdata('firstName')."</h3>";
    }
    ?>






<?php include 'footer.php';?>

