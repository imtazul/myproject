<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Document</title>
</head>
<body>
    <div>
     <h2> Upload Image using Intervention </h2>
    @if(Session::has('msg'))
    <div>{{ Session::get('msg')}}</div>
    @endif

     <div>
        <form method="post" action=" {{ URL :: to('storeimage') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
            <label for=""> Select Image </label> 
            <input type="file" name="picture" id="picture">
            <br>
            <img width="200px" height="200px" src="" id="preview" alt="">
            <br>
            <button type="submit">Submit</button>
        </form>
     </div>
     <div>
        @foreach($images as $img)
       
           <img width="300px" height="300px" style="padding: 5px" src="{{ asset('uploads/'.$img->filename) }}" alt="">
        
        @endforeach
     </div>
     <div>
     
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $("#picture").change(function() {
             readURL(this);
            })

            function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('#preview').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]); // convert to base64 string
         }
        }
    </script>
</body>


</html>