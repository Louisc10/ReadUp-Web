<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'inputUsername' => 'required',
            'inputEmail' => 'required|email:rfc|unique:users,email',
            'inputPassword' => 'required|min:3',
            'inputConfirmPassword' => 'required|same:inputPassword',
        ];
    }
}
