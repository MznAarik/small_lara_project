<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = Auth::user();
        if (!$users) {
            dump("Illegal Login!!!");
            usleep(2000000);
            return redirect('/');
        }
        $employees = Employee::all();
        // dd($users);
        return view('employee-list', compact('employees'));
    }
    public function create()
    {
        $users = Auth::user();
        if ($users == null) {
            dump("Illegal Login");
            usleep(2000000);
            return redirect('/');
        }
        return view('add_employee');
    }
    public function store(Request $request)
    {
        $users = Auth::user();
        if (!$users) {
            dump("Illegal Login");
            usleep(1000000);
            return redirect('/');
        }
        $employee = new Employee();
        $employee->fname = $request->fname;
        $employee->lname = $request->lname;
        $employee->address = $request->address;
        $employee->phoneno = $request->phoneno;
        $employee->gender = $request->gender;
        $employee->email = $request->email;
        $employee->department = $request->department;
        $employee->staff_comment = $request->staff_comment;
        $employee->save();

        return redirect('employee/list');
    }
    public function edit($id)
    {
        $users = Auth::user();
        $employee = Employee::find($id);
        return view('edit_employee', compact('employee'));
    }
    public function update(Request $request)
    {

        Auth::user();
        $id = $request->id;
        $employee = Employee::find($id);
        $employee->fname = $request->fname;
        $employee->lname = $request->lname;
        $employee->address = $request->address;
        $employee->phoneno = $request->phoneno;
        $employee->gender = $request->gender;
        // $employee->email = $request->email;  // //if you dont want someone to edit some of the fields
        $employee->department = $request->department;
        $employee->staff_comment = $request->staff_comment;
        $employee->save();

        return redirect('employee/list');
    }
    public function delete($id)
    {
        Auth::user();
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('employee/list');

    }
    public function show($id)
    {
        Auth::user();
        $employee = Employee::find($id);
        return view('show_employee', compact('employee'));
    }
}
