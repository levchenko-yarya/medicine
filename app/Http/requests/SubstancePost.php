<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubstancePost extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'productName' => 'required|unique:active_substances|min:5|max:255'
        ];
    }

    public function messages()
    {
        return [
            'productName.required' => 'Необходимо указать название активного вещества',
            'productName.unique' => 'Такое активное вещество уже есть',
            'productName.min' => 'Необходимо написать больше 5 символов',
            'productName.max' => 'Вы превысили заданный размер (больше 255 символов)',
        ];
    }
}
