@extends("layouts.layout")

@section("title","Students List")

@section("content")
<div class="text-center container-fluid">
    <h1 >Students List</h1></div>
<br>
<div class="container-fluid">
    </table>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        
    @foreach ($students as $student)
      <td>{{ $student->fname }}</td>
      <td>{{ $student->lname }}</td>
      <td>{{ $student->address }}</td>
      <td>{{ $student->email }}</td>
      <td>
                        <button class="btn btn-primary w-100"><a href="{{ route('students.edit', $student) }}"  style="text-decoration:none; color:white;">Update</a></button>
            
                    </td>
                    <td>   <form method="POST" action="{{ route('students.destroy', $student) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger w-100">Delete</button>
                        </form></td>
    </tr>
   
   @endforeach

  </tbody>
</table>
</div>
   @endsection