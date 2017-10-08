<?php include 'header.php'; ?>

<h1>Rings</h1>

<?php if ($this->session->flashdata('message')){
    echo "<h3>".$this->session->flashdata('message')."</h3>";
}
?>

<?php
echo $this->session->userdata('ring');

?>













<?php include 'footer.php';?>
