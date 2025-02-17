<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeValidate;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // public function search(Request $request)
    // {
    //     $search = $request->search;
    //     $employees = Employee::all();

    //     if ($search !== '') {
    //         $employees = Employee::where('fname', 'LIKE', '%' . $search . '%')
    //             ->orWhere('lname', 'LIKE', '%' . $search . '%')
    //             ->orWhere('email', 'LIKE', '%' . $search . '%')
    //             ->orWhere('address', 'like', '%' . $search . '%')
    //             ->orWhere('department', 'like', '%' . $search . '%');
    //         dd($employees);
    //         if (is_numeric($search)) {
    //             $employees->orWhereRaw("CAST(phoneno AS TEXT) ILIKE ?", ["%{$search}%"]);
    //         }
    //         $employees = $employees->paginate(50);
    //     }
    //     return view('employee-list', compact('employees'));
    // }

    public function index(Request $request)
    {

        $users = Auth::user();
        if (!$users) {
            return redirect('/')->with('error', 'Illegal login! plz retry');
        }


        $search = $request->search;   //if query parameter is found
        $employees = Employee::paginate(6);

        if ($search !== '') {
            $employees = Employee::Where('fname', 'LIKE', '%' . $search . '%')
                ->orWhere('lname', 'LIKE', '%' . $search . '%')
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('address', 'like', "%{$search}%")
                ->orWhere('gender', 'like', "%{$search}%")
                ->orWhere('department', 'like', "%{$search}%");

            if (is_numeric($search)) {
                $employees->orWhere('phoneno', 'like', "%{$search}%");
            }
            // $employees = $employees->paginate(2);
            $employees = $employees->orderByDesc('created_at')->orderByDesc('updated_at')->paginate(6); // Correct pagination placement

        }

        return view('employee-list', compact('employees', 'search'));
    }
    public function create()
    {
        $users = Auth::user();
        if ($users == null) {
            return redirect('/')->with('error', 'Illegal login! plz retry ');
        }
        return view('add_employee');
    }
    public function store(EmployeeValidate $request)
    {
        $users = Auth::user();
        if (!$users) {
            return redirect('/')->with('error', 'Illegal Login.. Plz Retry');
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

        return redirect('employee/list')->with('success', 'Employee Added successfylly!!');
    }
    public function edit($id)
    {
        $users = Auth::user();
        $employee = Employee::find($id);
        return view('edit_employee', compact('employee'));
    }
    public function update(EmployeeValidate $request)
    {

        $users = Auth::user();
        if (!$users) {
            return redirect('/')->with('error', 'Illegal Login.. Plz Retry');
        }
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

        return redirect('employee/list')->with('success', 'Employee updated successfylly!!');

    }
    public function delete($id)
    {
        Auth::user();
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('employee/list')->with('success', 'Employee Deleted Successfully!!');

    }
    public function show($id)
    {
        Auth::user();
        $employee = Employee::find($id);
        return view('show_employee', compact('employee'));
    }
}
