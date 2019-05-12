<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditColor extends FormRequest
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
            'nameColor' => 'required',
            'status' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nameColor.required'=>':attribute không được để trống',
            'status.required'=>':attribute không được để trống',
        ];
    }
}
