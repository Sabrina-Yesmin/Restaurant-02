

<html lang="en">
<head>
  <title>Laravel  Image Intervention</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <h3 class="jumbotron">Laravel  Image Intervention </h3>
    <form method="post" action="<?php echo e(URL::to('/uploadimage')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        

          <div class="col-md-4">
            <input type="text" name="alttext" class="form-control">
            </div>
<input type="file" multiple id="gallery-photo-add" name="filename[]" >
<div class="gallery" img width = "200px" alt="your image"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image</button>
            </div>
        </div>

  </form>

  <div>
    <?php if($images): ?>
      <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <img width="100px" src="<?php echo e(asset('thumbnail/'.$img->filename)); ?>" >
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  </div>
  </div>


  <script>
    $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\finalsd\resources\views/upload.blade.php ENDPATH**/ ?>