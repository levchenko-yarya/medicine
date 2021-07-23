<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManufacturerPost extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'companyName' => 'required|min:5|max:255',
            'url' => 'min:5|max:255'
        ];
    }

    public function messages()
    {
        return [
            'companyName.required' => 'Необходимо указать название компании',
            'companyName.min' => 'Необходимо написать больше 5 символов',
            'companyName.max' => 'Вы превысили заданный размер (больше 255 символов)',
            'url.min' => 'Необходимо написать больше 5 символов',
            'url.max' => 'Вы превысили заданный размер (больше 255 символов)',
        ];
    }
}
