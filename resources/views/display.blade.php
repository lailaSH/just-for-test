
   <!doctype html>
   <html lang="ar" dir="rtl">
     <head>
         <meta charset="utf-8">
         <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
     </head>
    <div class="container">
<style>

.table{
    background-color: #023e8aad;

  }
.b{
  opacity: 0.1;
  position: fixed;
  height: 50%;
  width: 80%;
  top:30%;
  z-index: -1;
}
  .f1{
    display: inline-block;
    margin-left: 100px;
  }
  .f2{
    display: inline-block;
  }

</style>
<body>
{{-- <img class="b" src="{{asset('img/ssvs.png')}}" > --}}
<div class="container">
<div class="f1"  >
<form action="{{route('student_info')}}" method="POST" >
  @csrf
  <label for="">                         بحث على حسب  رقم الطالب 
  </label><br>
  <input type="number" name="student_number">
  <br/>
  <button type="submit" class="btn btn-primary" >
بحث
 </button>
</form>
</div>
<div class="f2" >
<form action="{{route('student_info_name')}}" method="POST" >
  @csrf
  <label for="">                         بحث على حسب  اسم الطالب 
  </label><br>
  <input type="string" name="student_name">
  <br/>
  <button type="submit" class="btn btn-primary" >
بحث
 </button>
</form>
</div>
@if($students!=null)
@foreach ($students as $student)
        <table class="table">
      <thead class="bg-light">
        <tr class >
          <th>الاسم </th><br>
          <th>اسم الأب</th><br> 
          <th>اسم الأم</th> 
          <th>الكنية</th> 
          <th>الصف</th> 
          <th>رقم الهاتف</th> 
          <th>تاريخ الولادة</th> 
          <th>مكان الولادة</th> 
        </tr>
        </thead>
        <tr >
          <td>{{$student->first_name}}</td>
          <td>{{$student->father_name}}</td>
          <td>{{$student->mother_name}}</td>
          <td>{{$student->last_name}}</td>
          <td>{{$student->class}}</td>
          <td>{{$student->phone}}</td>
          <td>{{$student->birthday_date}}</td>
          <td>{{$student->birthday_place}}</td>
        </tr>   
    </table>
    @endforeach
    @endif
</body>
    </div>
    </html>