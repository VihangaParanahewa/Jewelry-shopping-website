<?php $page='login';$count=1;
$generatedCode=random_string('numeric', 6);include 'template/logHeader.php' ?>

<?php foreach ($data as $row){
if($count==1) {
    // Authorisation details.
    $username = "vihangaparanahewa994@gmail.com";
    $hash = "8d0b40805c12426f5c8a210503a19ad1df645388356d8f741f32d14a1ecde331";

    // Config variables. Consult http://api.txtlocal.com/docs for more info.
    $test = "0";

    // Data for text message. This is the text message data.
    $sender = "NovelJew"; // This is who the message appears to be from.
    $phoneNo = substr($row['telNo'], 1);
    $numbers = "94.$phoneNo"; // A single number or a comma-seperated list of numbers
    $message = "Code: $generatedCode";
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=" . $username . "&hash=" . $hash . "&message=" . $message . "&sender=" . $sender . "&numbers=" . $numbers . "&test=" . $test;
    $ch = curl_init('http://api.txtlocal.com/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
    echo($result);
}

?>

    <div class="container">

        <h1>Code Validation</h1>

        <hr>
        <?php echo validation_errors(); ?>
        <?php echo form_open('Login/matchCode');?>

        <div class="row">
            <div class="form-group col-xs-3">
                <label for="exampleInputTextCode1">CODE Number</label>
                <input type="text" class="form-control" id="textCode" placeholder="Code" name="textCode">
                (We Just Send Validation Code, Check Your Phone Messages-Code Has 6 Numbers)
            </div>
        </div>

        <div class="row">
            <div class="form-group col-xs-3">
                <input type="hidden" class="form-control" name="generatedCode"
                       value="<?php echo $generatedCode; ?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-xs-3">
                <input type="hidden" class="form-control" name="email" value="<?php echo $row['email']?>">
            </div>
        </div>

<?php } ?>
        <button type="submit" class="btn btn-danger" name="submit" value="Confirm">Confirm</button>

        <?php echo form_close(); ?>
    </div>



<?php include 'template/footer.php'?>