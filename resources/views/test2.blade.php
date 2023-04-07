 {{-- @section('part1')
<table class="table">
    <tr class="TableOrBtn">
      <th>اسم الاب</th>
      <th>اسم الام</th> 
      <th>عمل الام</th>
    </tr>
    <tr>

    </tr>
  </table> 
  @show

  @section('part2')
<h1>aaaaaaa</h1>
  @show  --}}
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
    <div class="d-flex justify-content-center">
      {!! $students->links() !!}
  </div>
 @endif 
