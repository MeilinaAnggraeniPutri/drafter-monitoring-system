<?php

namespace Modules\Infrastructure\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInfrastructureRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'body' => ['required', 'string'],
            'thumbnail' => ['required', 'file'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
