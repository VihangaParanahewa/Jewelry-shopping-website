<?php include 'header.php'; ?>


<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Update Ring Post</h1>

            <?php echo form_open('Admin/updatePost');?>

            <div class="form-group has-error">
                <label for="slug">Title <span class="require"></span></label>
                <input type="text" class="form-control" name="title" value="<?php echo $this->session->userdata('title')?>"/>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category" value="<?php echo $this->session->userdata('category')?>"/>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea rows="5" class="form-control" name="description"><?php echo $this->session->userdata('description')?></textarea>
            </div>

            <div class="form-group">
                <label for="colour">Colour</label>
                <input type="color" class="form-control" name="colour" value="<?php echo $this->session->userdata('colour')?>">
            </div>

            <div class="form-group">
                <label for="price">Price</label>

                <div class="input-group">
                    <span class="input-group-addon">LKR</span>
                    <input type="number" class="form-control" name="price" value="<?php echo $this->session->userdata('price')?>">
                </div>
            </div>

            <div class="form-group">
                <label for="image">Type Image Name</label>
                <input type="text" name="image" value="<?php echo $this->session->userdata('image')?>" placeholder="xxx.jpg"/>
                (Eg:xxx.jpg)
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit" value="update">
                    Update
                </button>
                <button class="btn btn-default" name="submit" value="cancel">
                    Cancel
                </button>
            </div>

            <?php echo form_close(); ?>
        </div>

    </div>
</div>















<?php include 'footer.php';?>





