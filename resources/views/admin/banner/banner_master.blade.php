<div class="modal-body row">
    <!-- page -->
    <div class="form-group col-md-4 col-sm-3">
        <label>Page:</label>
        <input type="text" name="page" placeholder="Page" class="form-control page" required>
    </div>
    <!-- title -->
    <div class="form-group col-md-4 col-sm-3">
        <label>Title:</label>
        <input type="text" name="title" placeholder="Title" class="form-control title">
    </div>
    <!-- subtitle -->
    <div class="form-group col-md-4 col-sm-3">
        <label>Subtitle:</label>
        <input type="text" name="subtitle" placeholder="Subtitle" class="form-control subtitle">
    </div>
    <!-- image -->
    <div class="form-group col-md-12">
        <label>Image:</label>
        <input type="file" name="image" placeholder="Image" class="form-control image">
        <div class="col-md-3 preview_wrapper" hidden>
            <img src="<?php echo(asset('img/noimg.jpg')); ?>" class="preview_image" alt="" width="100%">
        </div>
    </div>
    <!-- description -->
    <div class="form-group col-md-12">
        <label>Description:</label>
        <textarea type="text" name="description" placeholder="Description" class="form-control description"></textarea>
    </div>
    <!-- status -->
    <div class="form-group col-md-12">
        <label>Status:</label>
        <br>
        <label class="switch">
            <input type="checkbox" name="status" class="status form-control">
            <span class="slider"></span>
        </label>
    </div>
</div>