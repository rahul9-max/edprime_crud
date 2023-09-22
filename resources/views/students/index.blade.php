@extends('students.layouts')

@section('content')
    <div class="container">
        <!-- Display Student Data in a Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Class-Section</th>
                    <th>Father Name</th>
                    <th>Scholar Number</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class_section }}</td>
                    <td>{{ $student->father_name }}</td>
                    <td>{{ $student->scholar_number }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        <a href="{{ url('students/edit',['id' =>$student->id]) }}" class="btn btn-primary">Edit</a>
                        <!-- Add a delete form with a button -->
                        <form method="POST" action="{{ url('students/delete',['id'=> $student->id]) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Pagination Links -->
        {{ $students->links() }}
    </div>
@endsection
