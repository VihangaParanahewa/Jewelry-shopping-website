<?php $page='profile'; include dirname(__FILE__).'./../Customer/header.php'; ?>
    <br><br>
    <div class="container">

        <h1>Rest Password
            &nbsp&nbsp<a href="<?php echo base_url('index.php/Login/viewProfile')?>" class="btn btn-warning active">BACK</a>
        </h1>

        <?php
        if ($this->session->flashdata('message')){
            echo "<h3>".$this->session->flashdata('message')."</h3>";
        }
        ?>

        <hr>
        <?php echo validation_errors(); ?>
        <?php echo form_open('EditProfile/validateEditPassword');?>

        <div class="row">
            <div class="form-group col-xs-3">
                <label for="exampleInputOldPassword1">Password</label>
                <input type="password" class="form-control" id="oldPassword" placeholder="Current Password" name="oldPassword">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-xs-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-xs-3">
                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm Password" name="confirmPassword">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-danger" name="submit" value="Update">Update Profile</button>

        <?php echo form_close(); ?>
    </div>

<?php unset(
    $_SESSION['message']
);?>

<?php include dirname(__FILE__).'./../Customer/footer.php';?>