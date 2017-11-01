<?php $page='updateE';include dirname(__FILE__).'./../Customer/header.php'; ?>


<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Update Ring Post</h1>
            <hr>
            <?php foreach ($data as $row){ ?>

            <?php echo form_open('Admin/updatePost/'.$row['ringId']);?>


            <div class="row">
                <div class="form-group has-error col-xs-6">
                <label for="slug">Title <span class="require"></span></label>
                <input type="text" class="form-control" name="title" value="<?php echo $row['title']?>"/>
            </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-2">
                    <label for="category">Category</label>
                    <select name="category" class="form-control">
                        <option value="Ring">Ring</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-4">
                <label for="description">Description</label>
                <textarea rows="5" class="form-control" name="description"><?php echo $row['description']?></textarea>
            </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-3">
                <label for="price">Price</label>

                <div class="input-group">
                    <span class="input-group-addon">LKR</span>
                    <input type="number" class="form-control" name="price" value="<?php echo $row['price']?>">
                </div>
            </div>
            </div>

                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="image">Image</label>
                        <input type="file" name="image" value="<?php echo $row['image']?>"/>
                        (select image if you want to change otherwise don't want to select)
                    </div>
                </div>

            <div class="row">
                <div class="form-group col-xs-4">
                <button type="submit" class="btn btn-primary" name="submit" value="update">
                    Update
                </button>
                <button class="btn btn-danger" name="submit" value="cancel">
                    Cancel
                </button>
            </div>
            </div>

            <?php echo form_close(); ?>
            <?php } ?>
        </div>

    </div>
</div>















<?php include dirname(__FILE__).'./../Customer/footer.php';?>






