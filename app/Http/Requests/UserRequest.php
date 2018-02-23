<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
            return [
                'firstname' => 'required|min:4|alpha',
                'lastname' => 'required|min:4|alpha'
            ];
    }
}