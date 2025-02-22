@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
    <div class="card shadow-lg">
        <h2 class="text-center mb-4">View Employee Details</h2>
        <form>
            <div class="row">
                <!-- First Column: First Name & Last Name -->
                <div class="col-md-6">
                    <div class="col-md-12">
                        <input type="text" name="id" class="form-control" value="{{$employee->id}}" hidden>
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" name="fname" class="form-control" value="{{$employee->fname}}" readonly>
                    </div>
                    <div class="mt-1">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" value="{{$employee->lname}}" readonly>
                    </div>
                </div>

                <!-- Second Column: Image Display -->
                <div class="col-md-6  d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Photo"
                            class="img-fluid img-responsive rounded" style="max-width: 150px; height: 150px;">
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="{{$employee->address}}" readonly>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="phoneno" class="form-label">Phone Number</label>
                    <input type="text" name="phoneno" class="form-control" value="{{$employee->phoneno}}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" class="form-select" readonly>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$employee->email}}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" name="department" class="form-control" value="{{$employee->department}}" readonly>
                </div>
            </div>

            <div class="col-md-12">
                <label for="staff_comment" class="form-label">Staff Comment</label>
                <input type="text" name="staff_comment" value="{{$employee->staff_comment}}"
                    class="form-control @error('department') is-invalid @enderror" readonly>
                @error('staff_comment')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row mt-2">
                <div class="col-md-6 form-group @error('shifts') is-invalid @enderror">
                    <label for="shifts" class="form-label">Shifts</label>
                    <br>
                    <input type="text" name="shifts" value="{{$employee->shifts}}"
                        class="form-control @error('shifts') is-invalid @enderror" readonly>
                    <!--if you want array back use explode-->
                    @error('shifts')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="manager" class="form-label">Reporting Manager</label>
                    <input type="text" name="manager" value="{{($employee->manager)}}"
                        class="form-control @error('department') is-invalid @enderror">
                    @error('manager')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <a href="{{route('employee.index')}}" class="btn btn-info">Go Back</a>
            </div>
        </form>
    </div>
@endsection