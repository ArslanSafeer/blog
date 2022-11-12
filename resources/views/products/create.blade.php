@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<!-- if validation in the controller fails, show the errors -->
@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif

<div>

<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
    <div class="form-group">
      <label for=""></label>
      <input type="hidden" name="projectdetails_id" class="form-control" value="{{$id}}">
    </div>
                <div class="form-group">
                    <label for="exampleInputFile">Upload Project Images*</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Upload</button>
                      </div>
                    </div>
                  </div>
    
</form>

<div id="display-image">
          
          @foreach ($data as $image)
          <tr>
            <td><img src="{{ asset('storage/product/'.$image->file_path) }}" alt="" height="200px" width="200px"></td>
          </tr>
          @endforeach
      
</div>
</div>
</body>
</html>
@endsection