<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();
        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'student_id' => 'required|string',
            'class' => 'required|string|max:20',
            'name' => 'required|string|max:100',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'father_name' => 'nullable|string|max:100',
            'contact_number' => 'nullable|string|max:20',
            'mother_name' => 'nullable|string|max:100',
            'address_line1' => 'nullable|string|max:150',
            'address_line2' => 'nullable|string|max:150',
            'city' => 'nullable|string|max:100',
        ]);


        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {

        return view('admin.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'student_id' => 'required|string',
            'class' => 'required|string|max:20',
            'name' => 'required|string|max:100',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'father_name' => 'nullable|string|max:100',
            'contact_number' => 'nullable|string|max:20',
            'mother_name' => 'nullable|string|max:100',
            'address_line1' => 'nullable|string|max:150',
            'address_line2' => 'nullable|string|max:150',
            'city' => 'nullable|string|max:100',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
