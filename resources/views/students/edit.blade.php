@extends('students.layouts') <!-- Extend the layout if needed -->

@section('content')
    <div class="container">
    <h1>Edit Student</h1>
        <form method="POST" action="{{ url('students/update', ['student' => $student->id]) }}">
            @csrf
            @method('PUT') <!-- Use the PUT method for updating -->
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name) }}" required>
            </div>

            <div class="form-group">
                <label for="class_section">Class-Section</label>
                <input type="text" class="form-control" id="class_section" name="class_section" value="{{ old('class_section', $student->class_section) }}" required>
            </div>

            <div class="form-group">
                <label for="father_name">Father Name</label>
                <input type="text" class="form-control" id="father_name" name="father_name" value="{{ old('father_name', $student->father_name) }}" required>
            </div>

            <div class="form-group">
                <label for="scholar_number">Scholar Number</label>
                <input type="text" class="form-control" id="scholar_number" name="scholar_number" value="{{ old('scholar_number', $student->scholar_number) }}" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $student->address) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    @push('scripts')
    <script src="{{ asset('js/student.js') }}"></script>
    @endpush
    <!--  asset() function generates URLs to your application's assets (e.g., JavaScript, CSS, and image files)  -->
@endsection
