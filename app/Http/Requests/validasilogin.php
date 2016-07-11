<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validasilogin extends Request
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
        'username'=>'email|required',
        'password'=>'required'
        ];
    }

    public function messages()
    {
        # code...
        return [
            'username.required'=>'username harus diisi',
            'username.email'=>'username harus format email',
            'password.required'=>'password harus diisi'

        ];  
    }
}
