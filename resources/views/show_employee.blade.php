@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
    <div class="card shadow-lg">
        <h2 class="text-center mb-4">View Employee Details</h2>
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <!--readonly for secured editing method instead of url(update/{3})-->
                    <input type="text" name="id" class="form-control" value=" {{$employee->id}}" hidden>
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" name="fname" class="form-control" value=" {{$employee->fname}}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" class="form-control" value="{{$employee->lname}}" readonly>
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

            <div class="mb-3">
                <label for="staff_comment" class="form-label">Staff Comment</label>
                <textarea name="staff_comment" class="form-control" rows="2"
                    readonly>{{$employee->staff_comment}}</textarea>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{url('employee/list')}}" class="btn btn-info">Go Back</a>
            </div>
        </form>
    </div>
@endsection