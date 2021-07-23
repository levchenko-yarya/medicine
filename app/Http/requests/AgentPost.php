<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentPost extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'productName' => 'required|min:5|max:255',
            'price' => 'min:1'
        ];
    }

    public function messages()
    {
        return [
            'productName.required' => 'Необходимо указать название лекарства',
            'productName.min' => 'Необходимо написать больше 5 символов',
            'productName.max' => 'Вы превысили заданный размер (больше 255 символов)',
            'price.min' => 'Необходимо указать больше 1',
        ];
    }
}
