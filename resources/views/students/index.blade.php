@extends("layouts.layout")

@section("title","Student's List")

@section("content")

    <h1 class="text-center">Students's List</h1>
<br>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
                <tr>
                    <td>{{ $student->fname }}</td>
                    <td>{{ $student->lname }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->email}}</td>
                    
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
   @endsection