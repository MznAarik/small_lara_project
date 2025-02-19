<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fname' => 'required|max:20|min:3',
            'lname' => 'required|max:20|min:3',
            'address' => 'required|min:3',
            'phoneno' => 'required|integer|digits:10',
            'email' => 'required|email|unique:employees',
            'department' => 'required|min:3',
            'staff_comment' => 'required|min:3',
            'image' => 'required|mimes:png,jpg,jpeg|max:5000',
        ];
    }
}
