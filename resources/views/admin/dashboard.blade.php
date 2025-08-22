@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card text-dark bg-light shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Students</h5>
                    <h2>{{$totalStudents}}</h2>
                </div>
                <div class="card-footer text-center">
                    <a href="{{route('students.index')}}" class="text-dark">View Details</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
