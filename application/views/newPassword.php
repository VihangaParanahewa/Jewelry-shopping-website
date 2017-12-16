<?php $page='login';include 'template/logHeader.php' ?>



    <div class="container">

    <h1>Update Password</h1>

    <hr>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Login/updatePassword');?>

    <div class="row">
        <div class="form-group col-xs-3">
            <label for="exampleInputNewPassword1">New Password</label>
            <input type="password" class="form-control" id="newPassword" placeholder="New Password" name="password">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xs-3">
            <label for="exampleInputConfirmPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="password" name="confirmPassword" placeholder="Confirm Password">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xs-3">
            <input type="hidden" class="form-control" name="email" value="<?php echo $data['email']?>">
        </div>
    </div>

    <button type="submit" class="btn btn-danger" name="submit" value="Confirm">Update Password</button>

<?php echo form_close(); ?>
    </div>



<?php include 'template/footer.php'?>