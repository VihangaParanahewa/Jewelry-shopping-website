<?php include dirname(__FILE__).'./../Customer/header.php'; ?>

<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Create Post</h1>
            <hr>

            <?php
            if ($this->session->flashdata('message')){
                echo "<h3>".$this->session->flashdata('message')."</h3>";
            }
            ?>

            <?php echo validation_errors(); ?>
            <?php echo form_open('Admin/add');?>
            <div class="row">
                <div class="form-group col-xs-6 has-error">
                    <label for="slug">Title <span class="require"></span></label>
                    <input type="text" class="form-control" name="title" placeholder="Set A Title" />
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-4">
                    <label for="category">Category</label>
                    <select name="category" class="form-control">
                        <option value="None">(Select The Category)</option>
                        <option value="Ring">Ring</option>
                        <option value="Necklace">Necklace</option>
                        <option value="Earring">Earring</option>
                    </select>

                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-8">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control" name="description" placeholder="Type Description"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="colour">Colour</label>
                    <input type="color" class="form-control" name="colour">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="price">Price</label>

                    <div class="input-group">
                        <span class="input-group-addon">LKR</span>
                        <input type="number" class="form-control" name="price" placeholder="00000">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                    <label for="image">Post Image</label>
                    <input type="file" name="image" placeholder="image"/>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-4">
                    <button type="submit" class="btn btn-primary" name="submit" value="create">
                        Create
                    </button>
                    <button class="btn btn-danger" name="submit" value="cancel">
                        Cancel
                    </button>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>

    </div>
</div>

<?php unset(
    $_SESSION['message']
);?>













<?php include dirname(__FILE__).'./../Customer/footer.php';?>
