<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    // Show all lecturers
    public function index()
    {
        $lecturers = Lecturer::all();  // Retrieve all lecturers
        return view('lecturers.index', compact('lecturers'));  // Return the data to the index view
    }

    // Show details of a specific lecturer
    public function show($id)
    {
        $lecturer = Lecturer::findOrFail($id);  // Retrieve lecturer by id
        return view('lecturers.show', compact('lecturer'));  // Return the data to the show view
    }

    // Show the form to add a new lecturer
     public function create()
    {
        return view('lecturers.create');  // Return the view for creating a new lecturer
    }

    // Store a new lecturer in the database
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'lecturer_code' => 'required|unique:lecturers|size:3',
            'lecturer_name' => 'required',
            'nip' => 'required|unique:lecturers',
            'email' => 'required|email|unique:lecturers',
            'telephone_number' => 'nullable|string',
        ]);

        // Create a new lecturer record
        Lecturer::create($request->all());  
        return redirect()->route('lecturers.index')->with('success', 'Lecturer added successfully');
    }

    // Show the form to edit an existing lecturer
    public function getEditForm($id)
    {
        $lecturer = Lecturer::findOrFail($id);  // Retrieve the lecturer by id
        return view('lecturers.edit', compact('lecturer'));  // Return the form view for editing a lecturer
    }

    // Update the lecturer's data
    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'lecturer_code' => 'required|size:3|unique:lecturers,lecturer_code,' . $id,
            'lecturer_name' => 'required',
            'nip' => 'required|unique:lecturers,nip,' . $id,
            'email' => 'required|email|unique:lecturers,email,' . $id,
            'telephone_number' => 'nullable|string',
        ]);

        // Find and update the lecturer
        $lecturer = Lecturer::findOrFail($id);
        $lecturer->update($request->all());

        return redirect()->route('lecturers.index')->with('success', 'Lecturer updated successfully');
    }

    // Delete a lecturer
    public function destroy($id)
    {
        // Find the lecturer by id and delete
        $lecturer = Lecturer::findOrFail($id);
        $lecturer->delete();

        return redirect()->route('lecturers.index')->with('success', 'Lecturer deleted successfully');
    }
}
