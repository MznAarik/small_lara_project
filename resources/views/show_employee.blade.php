@php
    use App\Models\District;
@endphp

@extends('layouts.app')

@section('title', 'View Employee Details')

@section('content')
    <div class="card shadow-lg">
        <div class="card-body">
            <h2 class="text-center mb-4">View Employee Details</h2>

            <div class="row">
                <!-- First Column: First Name & Last Name -->
                <div class="col-md-6">
                    <input type="hidden" name="id" class="form-control" value="{{ $employee->id }}">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" name="fname" class="form-control" value="{{ $employee->fname }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" value="{{ $employee->lname }}" readonly>
                    </div>
                </div>

                <!-- Second Column: Image Display -->
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee Photo" class="img-fluid rounded"
                            style="max-width: 150px; height: 150px;">
                    </div>
                </div>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $employee->address }}" readonly>
            </div>

            <!-- Phone Number and Gender -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="phoneno" class="form-label">Phone Number</label>
                    <input type="text" name="phoneno" class="form-control" value="{{ $employee->phoneno }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" class="form-select" disabled>
                        <option value="male" {{ $employee->gender == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $employee->gender == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
            </div>

            <!-- Email and Department -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $employee->email }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="department" class="form-label">Department</label>
                    <input type="text" name="department" class="form-control" value="{{ $employee->department }}" readonly>
                </div>
            </div>

            <!-- Country, State, and District -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" class="form-control" value="{{ $employee->country_name ?? '' }}"
                        readonly>
                </div>
                {{-- <div class="col-md-4">
                    <label for="state" class="form-label">State</label>
                    <input type="text" name="state" class="form-control" value="{{ $employee->state_name ?? '' }}" readonly>
                </div> --}}
                <div class="col-md-6">
                    <label for="district" class="form-label">District</label>
                    {{-- direct method to get data --}}
                    {{-- @php
                    $district = District::find($employee->district_id);
                    @endphp --}}
                    <input type="text" name="district" class="form-control" value="{{ $employee->district_name}}" readonly>
                </div>
            </div>

            <!-- Staff Comment -->
            <div class="mb-3">
                <label for="staff_comment" class="form-label">Staff Comment</label>
                <input type="text" name="staff_comment" class="form-control" value="{{ $employee->staff_comment }}"
                    readonly>
            </div>

            <!-- Shifts and Reporting Manager -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="shifts" class="form-label">Shifts</label>
                    <input type="text" name="shifts" class="form-control"
                        value="{{ implode(', ', (array) $employee->shifts) }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="manager" class="form-label">Reporting Manager</label>
                    <input type="text" name="manager" class="form-control" value="{{ $employee->manager }}" readonly>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <a href="{{ route('employee.index') }}" class="btn btn-info">Go Back</a>
            </div>
        </div>
    </div>
@endsection