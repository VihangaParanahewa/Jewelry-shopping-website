<?php $page='profile'; include dirname(__FILE__).'./../Customer/header.php'; ?>
    <br><br>
<div class="container">

    <h1>Edit Profile
        &nbsp&nbsp<a href="<?php echo base_url('index.php/Login/viewProfile')?>" class="btn btn-warning active">BACK</a>
    </h1>
    <hr>
    <?php echo validation_errors(); ?>
    <?php echo form_open('EditProfile/ValidateEdit');?>
    <div class="row">
        <div class="form-group col-xs-3">
            <label for="exampleInputFirstName1">First Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName"
                   value="<?php echo $this->session->userdata('firstName') ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xs-3">
            <label for="exampleInputLastName1">Last Name</label>
            <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName"
            value="<?php echo $this->session->userdata('lastName') ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xs-3">
            <label for="exampleInputEmail1">Email Address</label>
            <input type="email" class="form-control" id="Email1" placeholder="Email Address" name="email"
            value="<?php echo $this->session->userdata('email') ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xs-3">
            <label for="exampleContactNumber1">Contact Number</label>
            <input type="tel" class="form-control" id="telNo" placeholder="+94123456789" name="telNo"
            value="<?php echo  $this->session->userdata('telNo') ?>">
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-danger" name="submit" value="Update">Update Profile</button>

    <?php echo form_close(); ?>
</div>


<?php include dirname(__FILE__).'./../Customer/footer.php';?>