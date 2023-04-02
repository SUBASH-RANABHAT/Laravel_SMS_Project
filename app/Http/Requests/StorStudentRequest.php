<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorStudentRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required',
            'roll_no' => 'required',
            'password' => 'required',
            'image' => 'nullable|mimes:pdf,jpg,png|max:1000'
        ];
    }
}
