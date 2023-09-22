<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function home(){
        return view('students.create');
    }
    public function index()
    {
        $students = Student::paginate(10);
        return view('students.index', compact('students'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'class_section' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'scholar_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $student = new Student();
        $student->name = $validatedData['name'];
        $student->class_section = $validatedData['class_section'];
        $student->father_name = $validatedData['father_name'];
        $student->scholar_number = $validatedData['scholar_number'];
        $student->address = $validatedData['address'];
        $student->save();

        return response()->json(['message' => 'Student created successfully', 'student' => $student], 201);
    }
    
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }
    

    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'class_section' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'scholar_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        $student->update($validatedData);
        return response()->json(['message' => 'Student updated successfully', 'student' => $student], 200); // actual student data that was just created in the database.
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(['message' => 'Student deleted successfully'], 200);
    }
}
