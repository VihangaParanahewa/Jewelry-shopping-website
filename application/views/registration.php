<?php $page='registration'; include 'template/logHeader.php' ?>


        <div class="container">

            <h1>Registration</h1>

            <?php
            if ($this->session->flashdata('message')){
                echo "<h3>".$this->session->flashdata('message')."</h3>";
            }
            ?>

            <hr>
            <?php echo validation_errors(); ?>
            <?php echo form_open('Register/registerUser');?>
            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="exampleInputFirstName1">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="exampleInputLastName1">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" id="Email1" placeholder="Email Address" name="email">
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

            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="exampleContactNumber1">Contact Number</label>
                    <input type="tel" class="form-control" id="telNo" placeholder="+94123456789" name="telNo">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <input type="hidden" class="form-control" id="type"  name="type" value="Customer">
                </div>
            </div>

            <button type="submit" class="btn btn-danger" name="submit" value="Register">Register</button>

            <?php echo form_close(); ?>
    </div>


<?php unset(
    $_SESSION['message']
);?>

<?php include 'template/footer.php'?>