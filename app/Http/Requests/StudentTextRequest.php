<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentTextRequest extends FormRequest
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
            'user' => 'required|max:191',
            'text' => 'required|max:191',
        ];
    }
}
