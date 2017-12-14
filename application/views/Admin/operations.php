<?php $page='operations'; include dirname(__FILE__).'./../Customer/header.php'; ?>
<br><br>
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>ADD USER
                &nbsp&nbsp<a href="<?php echo base_url('index.php/Users');?>" class="btn btn-info active">VIEW SYSTEM USERS</a>
                &nbsp&nbsp<a href="<?php echo base_url('index.php/Users/OnlineUsers');?>" class="btn btn-success active">VIEW ONLINE USERS</a>
            </h1>
            <hr>

            <?php
            if ($this->session->flashdata('message')){
                echo "<h3>".$this->session->flashdata('message')."</h3>";
            }
            ?>

            <h3><?php echo validation_errors(); ?></h3>
            <?php echo form_open('Register/registerUser');?>
            <div class="row">
                <div class="form-group col-xs-5">
                    <label for="exampleInputFirstName1">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-5">
                    <label for="exampleInputLastName1">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-5">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" id="Email1" placeholder="Email Address" name="email">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-5">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-5">
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
                <div class="form-group col-xs-4">
                    <label for="exampleInputType">Type</label><br>
                    <select name="type">
                        <option value="None">(Please Select A Type)</option>
                        <option value="Admin">Admin</option>
                        <option value="Customer">Customer</option>
                    </select>
                </div>
            </div>
            <br>

            <button type="submit" class="btn btn-danger active" name="submit" value="Confirm">Confirm</button>
            <?php echo form_close(); ?>
        </div>

    </div>
</div>

<?php unset(
    $_SESSION['message']
);?>


<?php include dirname(__FILE__).'./../Customer/footer.php';?>