<?php $page='login'; include 'template/logHeader.php' ?>



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
        <br>
        <a  data-toggle="modal" data-target="#myModal" class="forgot-password" href="#">
            Forgot the password?
        </a>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Forgot Password</h4>
                    </div>
                    <div class="modal-body">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('Login/requireEmail');?>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="exampleInputEmailAddress1">Email Address</label>
                                <input type="text" class="form-control" id="email" placeholder="Email Address" name="email">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-danger" name="submit" value="Confirm">Confirm</button>

                        <?php echo form_close(); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


    </div>

<?php unset(
    $_SESSION['message']
);?>


<?php include 'template/footer.php'?>

