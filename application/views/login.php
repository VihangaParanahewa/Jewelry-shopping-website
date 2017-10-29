<?php $page='login'; include 'template/header.php' ?>



<?php echo validation_errors(); ?>
<?php echo form_open('Login/loginUser');?>
    <div class="container">
        <h1>Login</h1>

        <?php
        if ($this->session->flashdata('message')){
            echo "<h3>".$this->session->flashdata('message')."</h3>";
        }
        ?>

        <hr>
        <div class="row">
        <div class="form-group col-xs-3">
            <label for="exampleInputEmail1">Email Address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address" name="email">
        </div>
        </div>

        <div class="row">
        <div class="form-group col-xs-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        </div>
        <button type="submit" class="btn btn-danger">Login</button>
        <?php echo form_close(); ?>
    </div>


<?php include 'template/footer.php'?>

