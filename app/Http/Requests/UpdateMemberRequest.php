<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
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
            'firstname' => [],
            'lastname' => ['required'],
            'dob' => [],
            'summery' => [],
            'ds_division_id' => ['required'],
            'email' => ['email', 'unique:users,email'],
        ];
    }

    /**
     * Get the validation field labels.
     *
     * @return array<string, string>
     */
    public function  attributes() : array 
    {
        return [
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'dob' => 'Date of Birth',
            'summery' => 'Summery',
            'ds_division_id' => 'DS Division',
            'email' => 'Email',
        ];
    }
}
