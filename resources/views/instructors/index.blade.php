@extends("layouts.layout")

@section("title","Instructors List")

@section("content")
<div class="text-center container-fluid">
    <h1 >Instructors List</h1></div>
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
        
    @foreach ($instructors as $instructor)
      <td>{{ $instructor->fname }}</td>
      <td>{{ $instructor->lname }}</td>
      <td>{{ $instructor->address }}</td>
      <td>{{ $instructor->email }}</td>
      <td>
                        <button class="btn btn-primary w-100"><a href="{{ route('instructors.edit', $instructor) }}"  style="text-decoration:none; color:white;">Update</a></button>
            
                    </td>
                    <td>   <form method="POST" action="{{ route('instructors.destroy', $instructor) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger w-100">Delete</button>
                        </form></td>
    </tr>
   
   @endforeach

  </tbody>
</table></div>
   @endsection