
   <!doctype html>
   <html lang="ar" dir="rtl">
     <head>
         <meta charset="utf-8">
         <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
     </head>
    <div class="container">
<style>

.btn2{
    align-items: center;
  background-image: linear-gradient(135deg, #f34079 40%, #023e8aad);
  border: 0;
  border-radius: 10px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  font-family: "Codec cold",sans-serif;
  font-size: 16px;
  font-weight: 700;
  height: 54px;
  justify-content: center;
  letter-spacing: .4px;
  line-height: 1;
  max-width: 100%;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 3px;
 
}

 .b{
  opacity: 0.2;
  position: fixed;
  height: 50%;
  width: 80%;
  top:30%;
  z-index: -1;
} 
.header{
color:#023e8aad;
}
</style>
<body>
<img class="b" src="{{asset('img/ssvs.png')}}" >
@if(count($errors)>0){
  <div>
  <ul>
  @foreach ($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
      {{$error}}
  </div>        <br/>
  @endforeach
  </ul>
  </div>
  }
  @endif
<div class="container mt-4">
    
  <h5  class= "header" >قم بتحميل ملفك</h5>
  <br/>
  <br/>

        <form method="POST" enctype="multipart/form-data"  action="{{route('uplode_file')}}" >
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="file" placeholder="Choose file" id="file" class="btn2">
                          @error('file')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                          <br/>
                  
                          <label> الصف </label>
                          <br/>
                          <select name="class">
                            <option value>   </option>
                                <option value="الأول
                                ">  الأول </option>
                                <option value="الثاني
                                ">الثاني</option>
                                <option value="الثالث
                                ">الثالث </option>
                                <option value="الرابع
                                "> الرابع</option>
                                <option value="الخامس
                                "> الخامس</option>
                            </select>                          <br/>
                          <br/>
                          <label> اسم المعلم/ة </label>
                          <br/>
                          <input type="text" name="teacher_name" value="{{Request::old('teacher_name')}}">
                          <br/><br/>
                          <label for="">نوع الملف</label>
                          <br/>
                          <select name="type">
                            <option value>   </option>
                                <option value="ملخص
                                ">  ملخص </option>
                                <option value="عرض تقديمي
                                ">عرض تقديمي</option>
                                <option value="غير ذلك
                                "> غير ذلك </option>
                            </select>                          <br/>
                          <label> رقم الوحدة   </label>
                          <br/>
                          <input type="text" name="unit_number" value="{{Request::old('unit_number')}}">
                          <br/>
                    </div>
                </div>
                   
                <div class="col-md-12">
                    <button type="submit" class="btn2" >Submit</button>
                </div>
            </div>     
        </form>
  </div>
</body>
    </div>
    </html>