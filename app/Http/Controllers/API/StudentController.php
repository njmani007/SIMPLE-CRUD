<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function list()
{
    $students = Student::get();

    if ($students->isEmpty()) {
        return response()->json([
            'status' => false,
            'message' => 'No students found',
        ], 404);
    }

    $data = [];

    foreach ($students as $student) {
        $data[] = [
            'student_id' => $student->student_id,
            'class' => $student->class,
            'name' => $student->name,
            'gender' => $student->gender,
            'dob' => $student->dob,
            'father_name' => $student->father_name,
            'contact_number' => $student->contact_number,
            'mother_name' => $student->mother_name,
            'address_line1' => $student->address_line1,
            'address_line2' => $student->address_line2,
            'city' => $student->city,
        ];
    }

    return response()->json([
        'status' => true,
        'message' => 'Students retrieved successfully',
        'data' => $data,
    ]);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = request()->validate([
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

        $student = Student::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Student created successfully',
            'data' => $student,
        ]);
    }

    public function studentDetails(Student $student)
    {

        $data = [
            'student_id' => $student->student_id,
            'class' => $student->class,
            'name' => $student->name,
            'gender' => $student->gender,
            'dob' => $student->dob,
            'father_name' => $student->father_name,
            'contact_number' => $student->contact_number,
            'mother_name' => $student->mother_name,
            'address_line1' => $student->address_line1,
            'address_line2' => $student->address_line2,
            'city' => $student->city,
        ];

        return response()->json([
            'status' => true,
            'message' => 'Student retrieved successfully',
            'data' => $data,
        ]);
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
        return response()->json([
            'status' => true,
            'message' => 'Student updated successfully',
            'data' => $student,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {

        $student->delete();
        return response()->json([
            'status' => true,
            'message' => 'Student deleted successfully',
            'data' => []
        ]);
    }
}
