{{-- createimage.blade.php --}}

<html lang="en">
<head>
  <title>Laravel  Image Intervention</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <h3 class="jumbotron">Laravel  Image Intervention </h3>
    <form method="post" action="{{ URL::to('/uploadimage') }}" enctype="multipart/form-data">
        @csrf
        {{-- <div class="row">
          <div class="col-md-4">
            <input type="text" name="alttext" class="form-control" placeholder="enter alttext">
          </div>

          <div class="form-group col-md-4">
          <input type="file" name="filename[]" id = "filename" class="form-control" multiple>
          <img width = "200px" id = "blah"  alt="your image">
          </div> --}}

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
    @if($images)
      @foreach($images as $img)
      <img width="100px" src="{{ asset('thumbnail/'.$img->filename)}}" >
      @endforeach
    @endif
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
