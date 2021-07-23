<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubstancePost extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'productName' => 'required|min:5|max:255'
        ];
    }

    public function messages()
    {
        return [
            'productName.required' => 'Необходимо указать название активного вещества',
            'productName.min' => 'Необходимо написать больше 5 символов',
            'productName.max' => 'Вы превысили заданный размер (больше 255 символов)',
        ];
    }
}
