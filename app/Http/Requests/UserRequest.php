<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'rePassword' => 'same:password',
            'email' => 'unique:users,email',
        ];
    }
    public function messages(){
        return [
            'rePassword.same' => 'Mật khẩu không trùng khớp!',
            'email.unique' => 'Email này đã tồn tại!',
        ];
    }
}
