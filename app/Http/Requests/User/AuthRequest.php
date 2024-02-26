<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class AuthRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'required|email',
            'password' => 'required|string',
        ];
    }
}
