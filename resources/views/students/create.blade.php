@extends('students.layouts')

@section('content')
    <div class="container">
    <!-- <form id="student-form" method="POST" action="{{ url('students/index') }}"> -->
    <form id="student-form" method="POST" action="{{ url('students') }}">

            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="class_section">Class-Section</label>
                <input type="text" class="form-control" id="class_section" name="class_section" required>
            </div>
            <div class="form-group">
                <label for="father_name">Father Name</label>
                <input type="text" class="form-control" id="father_name" name="father_name" required>
            </div>
            <div class="form-group">
                <label for="scholar_number">Scholar Number</label>
                <input type="text" class="form-control" id="scholar_number" name="scholar_number" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Include the student.js script -->
    @push('scripts')
    <script src="{{ asset('js/student.js') }}"></script>
    @endpush
@endsection
