@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
    <div class="card shadow-lg">
        <h2 class="text-center mb-4">Add New Employee</h2>
        <!--enctype compulsory for file upload-->
        <form action="{{ url('employee/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" name="fname" value="{{old('fname')}}" value="{{old('fname')}}"
                        class="form-control @error('fname') is-invalid @enderror">
                    @error('fname')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" value="{{old('lname')}}"
                        class="form-control @error('lname') is-invalid @enderror">
                    @error('lname')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" value="{{old('address')}}"
                    class="form-control @error('address') is-invalid @enderror ">
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="phoneno" class="form-label">Phone Number</label>
                    <input type="text" name="phoneno" value="{{old('phoneno')}}"
                        class="form-control @error('phoneno') is-invalid @enderror">
                    @error('phoneno')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" value="{{old('gender')}}" class="form-select">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="{{old('email')}}"
                        class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" name="department" value="{{old('department')}}"
                        class="form-control @error('department') is-invalid @enderror">
                    @error('department')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="staff_comment" class="form-label">Staff Comment</label>
                    <input type="text" name="staff_comment" value="{{old('staff_comment')}}"
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

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Save Employee</button>
            </div>
        </form>
    </div>
@endsection