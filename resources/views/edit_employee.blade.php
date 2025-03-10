@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
    <div class="card shadow-lg">
        <h2 class="text-center mb-4">Edit Employee</h2>
        <form action="{{ route('employee.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" name="id" class="form-control" value=" {{$employee->id}}" hidden>
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" name="fname" class="form-control  @error('fname') is-invalid @enderror"
                        value=" {{$employee->fname}}" required>
                </div>
                @error('fname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="col-md-6">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" class="form-control  @error('lname') is-invalid @enderror"
                        value="{{$employee->lname}}" required>
                </div>
                @error('lname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror"
                    value="{{$employee->address}}" required>
            </div>
            @error('address')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="phoneno" class="form-label">Phone Number</label>
                    <input type="text" name="phoneno" class="form-control  @error('phoneno') is-invalid @enderror"
                        value="{{$employee->phoneno}}" required>
                </div>
                @error('phoneno')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" class="form-select" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror"
                        value="{{$employee->email}}" readonly>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" name="department" class="form-control  @error('department') is-invalid @enderror"
                        value="{{$employee->department}}" required>
                    @error('department')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="staff_comment" class="form-label">Staff Comment</label>
                    <input type="text" name="staff_comment" value="{{($employee->staff_comment)}}"
                        class="form-control @error('department') is-invalid @enderror">
                    @error('staff_comment')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" value="{{old('image')}}" class="form-control" accept="images/*">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{url('employee/list')}}" class="btn btn-info">Go back</a>
                <button type="submit" class="btn btn-warning">Save Changes</button>
            </div>

    </div>
@endsection