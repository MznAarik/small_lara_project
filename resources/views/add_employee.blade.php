@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
    <div class="card shadow-lg">
        <h2 class="text-center mb-4">Add New Employee</h2>
        <form action="{{ url('employee/store') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" name="fname" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="phoneno" class="form-label">Phone Number</label>
                    <input type="text" name="phoneno" class="form-control" required>
                </div>
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
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" name="department" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="staff_comment" class="form-label">Staff Comment</label>
                <textarea name="staff_comment" class="form-control" rows="3" required></textarea>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save Employee</button>
            </div>
        </form>
    </div>
@endsection