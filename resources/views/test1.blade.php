<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document1</title>
</head>
<body>
    <h1>
        laila
    </h1>
    {{-- @extends('test2')
    @section('part2')
    @parent
        <h2>bbbbbbb</h2>
    @endsection --}}
    <form method="post" action="{{route('store_img')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <input type="file" name="image" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image</button>
          </div>
        </div>     
  </form>
</body>
</html>