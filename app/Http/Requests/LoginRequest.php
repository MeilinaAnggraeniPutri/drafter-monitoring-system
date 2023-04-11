<?php

namespace App\Http\Requests;

use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest as RequestsLoginRequest;

class LoginRequest extends RequestsLoginRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            Fortify::username() => 'nullable|string',
            'password' => 'nullable|string',
            'nik' => 'nullable|numeric',
        ];
    }
}
