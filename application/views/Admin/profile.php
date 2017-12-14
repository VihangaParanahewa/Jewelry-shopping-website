<?php $page='profile'; include dirname(__FILE__).'./../Customer/header.php'; ?>
    <div class="container">
    <br><br>
    <h1>My Profile</h1>
    <div class=" col-md-9 col-lg-9 ">
        <h3>
        <table class="table table-user-information" align="center">
            <tbody>
            <tr>
                <td>First Name:</td>
                <td><?php echo $this->session->userdata('firstName'); ?></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><?php echo $this->session->userdata('lastName'); ?></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><?php echo $this->session->userdata('email'); ?></td>
            </tr>
            <tr>
                <td>Contact Number:</td>
                <td><?php echo $this->session->userdata('telNo'); ?></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td><?php echo $this->session->userdata('type'); ?></td>
            </tr>

            </tbody>
        </table>
    </h3>
    </div>

<?php include dirname(__FILE__).'./../Customer/footer.php'; ?>