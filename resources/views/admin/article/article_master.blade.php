<div class="modal-body row">
    <!-- image -->
    <div class="form-group col-md-12">
        <label>Image:</label>
        <input type="file" name="image" placeholder="Image" class="form-control image">
        <div class="col-md-3 preview_wrapper" hidden>
            <img src="<?php echo(asset('img/noimg.jpg')); ?>" class="preview_image" alt="" width="100%">
        </div>
    </div>
    <!-- title -->
    <div class="form-group col-md-12">
        <label>Title:</label>
        <input type="text" name="title" placeholder="Title" class="form-control content title">
    </div>
    <!-- content -->
    <div class="form-group col-md-12 col-sm-3">
        <label>Content</label>
        <textarea type="text" rows="12" name="content" placeholder="Content" class="form-control content" required></textarea>
    </div>
</div>
