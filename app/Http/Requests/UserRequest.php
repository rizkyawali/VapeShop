<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $id = $this->user;

        return [
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required|min:6|max:16|confirmed',
            'first_name' => 'required',
            'last_name' => 'required'
        ];
    }
}
