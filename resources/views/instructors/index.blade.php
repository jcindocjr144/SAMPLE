@extends("layouts.layout")

@section("title","Instructor's List")

@section("content")

    <h1 class="text-center">Instructors's List</h1>
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
        @foreach ($instructors as $instructor)
                <tr>
                    <td>{{ $instructor->fname }}</td>
                    <td>{{ $instructor->lname }}</td>
                    <td>{{ $instructor->address }}</td>
                    <td>{{ $instructor->email}}</td>
                    
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
    </table>
   @endsection