<form method="POST" enctype="multipart/form-data"  action="{{route('store_alt')}}" >
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input type="file" name="file" placeholder="Choose file" id="file" class="btn2">
                  @error('file')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                  <br/>
        
                  <input type="text" name="name" value="name">
                  <br/>
            </div>
        </div>
           
        <div class="col-md-12">
            <button type="submit" class="btn2" >Submit</button>
        </div>
    </div>     
</form>