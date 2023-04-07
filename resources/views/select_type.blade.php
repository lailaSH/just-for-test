
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

</style>
<body>
<img class="b" src="{{asset('img/ssvs.png')}}" >
<div class="container mt-4">
    
        <form method="POST" enctype="multipart/form-data"  action="{{route('files_results')}}" >
            @csrf
           
            الصف
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
                </select>
                    <br/>
            </div>   
            <br/>  
            نوع الملف
  <select name="type">
    <option value>   </option>
        <option value="ملخص
        ">  ملخص </option>
        <option value="عرض تقديمي
        ">عرض تقديمي</option>
        <option value="غير ذلك
        "> غير ذلك </option>
    </select>                      
          <br/>
      <div class="col-md-12">
          <button type="submit" class="btn2" >Submit</button>
      </div>
  </div>     
</form>
  </div>
  @if($files!=null)
@foreach ($files as $file)
        <table class="table">
      <thead class="bg-light">
        <tr class >
          <th>الرقم </th>
          <th>الصف </th>
          <th>النوع</th> 
          <th>اسم المعلم</th> 
          <th>تاريخ الإنشاء </th> 
          <th>تحميل</th>
                </tr>
        </thead>
        <tr >
          <td>{{$file->id}}</td>
          <td>{{$file->class}}</td>
          <td>{{$file->type}}</td>
          <td>{{$file->teacher_name}}</td>
          <td>{{$file->created_at}}</td>
          <td style="font-size: 18px">    <a href={{ route('download_file',['id'=>$file->id]) }}> تحميل
            <i class="fas fa-eye "></i>
</a>        </td>
        </tr>   
    </table>
    @endforeach
    @endif
</body>
    </div>
    </html>