@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4>Edit Student</h4>
        </div>

        <div class="card-body">
              @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-3">

                    <!-- Student ID -->
                    <div class="col-md-6">
                        <label for="student_id" class="form-label">Student ID</label>
                        <input type="text" class="form-control" id="student_id" name="student_id"
                               value="{{ old('student_id', $student->student_id) }}" required>
                    </div>

                    <!-- Class -->
                    <div class="col-md-6">
                        <label for="class" class="form-label">Class</label>
                        <input type="text" class="form-control" id="class" name="class"
                               value="{{ old('class', $student->class) }}" required>
                    </div>

                    <!-- Name -->
                    <div class="col-md-6">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{ old('name', $student->name) }}" required>
                    </div>

                    <!-- Gender -->
                    <div class="col-md-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="" disabled>Choose...</option>
                            <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                            <option value="Other" {{ $student->gender == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>

                    <!-- Date of Birth -->
                    <div class="col-md-6">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob"
                               value="{{ old('dob', $student->dob->format('Y-m-d')) }}" required>
                    </div>

                    <!-- Contact Number -->
                    <div class="col-md-6">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number"
                               value="{{ old('contact_number', $student->contact_number) }}">
                    </div>

                    <!-- Father Name -->
                    <div class="col-md-6">
                        <label for="father_name" class="form-label">Father's Name</label>
                        <input type="text" class="form-control" id="father_name" name="father_name"
                               value="{{ old('father_name', $student->father_name) }}">
                    </div>

                    <!-- Mother Name -->
                    <div class="col-md-6">
                        <label for="mother_name" class="form-label">Mother's Name</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name"
                               value="{{ old('mother_name', $student->mother_name) }}">
                    </div>

                    <!-- Address Line 1 -->
                    <div class="col-md-12">
                        <label for="address_line1" class="form-label">Address Line 1</label>
                        <input type="text" class="form-control" id="address_line1" name="address_line1"
                               value="{{ old('address_line1', $student->address_line1) }}">
                    </div>

                    <!-- Address Line 2 -->
                    <div class="col-md-12">
                        <label for="address_line2" class="form-label">Address Line 2</label>
                        <input type="text" class="form-control" id="address_line2" name="address_line2"
                               value="{{ old('address_line2', $student->address_line2) }}">
                    </div>

                    <!-- City -->
                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city"
                               value="{{ old('city', $student->city) }}">
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-success px-4">Update</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary px-4">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
