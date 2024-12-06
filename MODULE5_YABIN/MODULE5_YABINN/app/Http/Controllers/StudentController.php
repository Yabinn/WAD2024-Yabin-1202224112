<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index()
    {
        $students = Student::all();  // Retrieve all students
        return view('students.index', compact('students'));  // Return the data to the index view
    }

    // Show details of a specific student
    public function show($id)
    {
        $student = Student::findOrFail($id);  // Retrieve student by id
        return view('students.show', compact('student'));  // Return the data to the show view
    }

    // Show the form to add a new student
    public function getCreateForm()
    {
        $lecturers = Lecturer::all();  // Fetch all lecturers to display in the form
        return view('students.create', compact('lecturers'));  // Return the form view for creating a new student
    }

    // Store a new student in the database
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'nim' => 'required|unique:students',
            'student_name' => 'required',
            'email' => 'required|email|unique:students',
            'major' => 'required',
            'dosen_id' => 'required|exists:lecturers,id',  // Ensure the lecturer exists
        ]);

        // Create a new student record
        Student::create($request->all());  
        return redirect()->route('students.index')->with('success', 'Student added successfully');
    }

    // Show the form to edit an existing student
    public function getEditForm($id)
    {
        $student = Student::findOrFail($id);  // Retrieve the student by id
        $lecturers = Lecturer::all();  // Fetch all lecturers for the form dropdown
        return view('students.edit', compact('student', 'lecturers'));  // Return the edit form view
    }

    // Update the student's data
    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'nim' => 'required|unique:students,nim,' . $id,
            'student_name' => 'required',
            'email' => 'required|email|unique:students,email,' . $id,
            'major' => 'required',
            'dosen_id' => 'required|exists:lecturers,id',  // Ensure the lecturer exists
        ]);

        // Find and update the student
        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    // Delete a student
    public function destroy($id)
    {
        // Find the student by id and delete
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
