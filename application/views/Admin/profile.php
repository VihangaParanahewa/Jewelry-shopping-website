<?php  include 'header.php'; ?>

    <h1>My Profile</h1>
    <div class=" col-md-9 col-lg-9 ">
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

            </tbody>
        </table>

<?php include 'footer.php'; ?>