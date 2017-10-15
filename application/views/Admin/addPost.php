<?php include 'header.php'; ?>

<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Create Post</h1>

            <?php
            if ($this->session->flashdata('message')){
                echo "<h3>".$this->session->flashdata('message')."</h3>";
            }
            ?>

            <?php echo validation_errors(); ?>
            <?php echo form_open('Admin/add');?>

                <div class="form-group has-error">
                    <label for="slug">Title <span class="require"></span></label>
                    <input type="text" class="form-control" name="title" />
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" class="form-control">
                        <option value="None">(Select The Category)</option>
                        <option value="Ring">Ring</option>
                        <option value="Necklace">Necklace</option>
                        <option value="Earring">Earring</option>
                    </select>

                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control" name="description" ></textarea>
                </div>

                <div class="form-group">
                    <label for="colour">Colour</label>
                    <input type="color" class="form-control" name="colour">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>

                    <div class="input-group">
                        <span class="input-group-addon">LKR</span>
                        <input type="number" class="form-control" name="price">
                    </div>
                </div>

                <div class="form-group">
                    <label for="image">Post Image</label>
                    <input type="file" name="image" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit" value="create">
                        Create
                    </button>
                    <button class="btn btn-default" name="submit" value="cancel">
                        Cancel
                    </button>
                </div>

            <?php echo form_close(); ?>
        </div>

    </div>
</div>

<?php unset($_SESSION['isDataOnRing'],
    $_SESSION['message']
);?>













<?php include 'footer.php';?>
