<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|unique:users,name',
            'email' => 'required|unique:users,email',
            'role_id' => 'required',
            'is_active' => 'required',
            'password' => ['required', 'min:5'],     
                   
        ];
    }
}
