<?php $page='operations'; include dirname(__FILE__).'./../Customer/header.php'; ?>
    <div class="container">
    <br><br>
    <h1>System User Profile Details</h1>
    <div class=" col-md-9 col-lg-9 ">
        <h3>
            <table class="table table-user-information" align="center">
                <tbody>
                <?php foreach ($data as $row){ ?>
                <tr>
                    <td>First Name:</td>
                    <td><?php echo $row['firstName']; ?></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><?php echo $row['lastName']; ?></td>
                </tr>
                <tr>
                    <td>Email Address:</td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <tr>
                    <td>Contact Number:</td>
                    <td><?php echo $row['telNo']; ?></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td><?php echo $row['type']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </h3>
    </div>

<?php include dirname(__FILE__).'./../Customer/footer.php'; ?>