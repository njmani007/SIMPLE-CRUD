
@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4>Student Details</h4>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <strong>Student ID:</strong> {{ $student->student_id }}
                </div>
                <div class="col-md-6">
                    <strong>Class:</strong> {{ $student->class }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <strong>Full Name:</strong> {{ $student->name }}
                </div>
                <div class="col-md-6">
                    <strong>Gender:</strong> {{ $student->gender }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <strong>Date of Birth:</strong> {{ $student->dob->format('d M, Y') }}
                </div>
                <div class="col-md-6">
                    <strong>Contact Number:</strong> {{ $student->contact_number ?? '-' }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <strong>Father's Name:</strong> {{ $student->father_name ?? '-' }}
                </div>
                <div class="col-md-6">
                    <strong>Mother's Name:</strong> {{ $student->mother_name ?? '-' }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <strong>Address:</strong>
                    {{ $student->address_line1 }} {{ $student->address_line2 }} <br>
                    {{ $student->city }}
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection
