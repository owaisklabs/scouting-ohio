<div class="modal-body row">
    <!-- image -->
    <div class="form-group col-md-12">
        <label>Thumbnail:</label>
        <input type="file" name="image" placeholder="Image" class="form-control image" required>
        <div class="col-md-3 preview_wrapper" hidden>
            <img src="<?php echo(asset('img/noimg.jpg')); ?>" class="preview_image" alt="" width="100%">
        </div>
    </div>
    <!-- title -->
    <div class="form-group col-md-12">
        <label>Video URL:</label>
        <input type="text" name="video_url" placeholder="Video URL" class="form-control  video_url" required>
    </div>
</div>
