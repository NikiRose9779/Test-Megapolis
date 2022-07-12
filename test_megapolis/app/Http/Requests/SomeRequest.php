<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SomeRequest extends FormRequest
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
            'date' => 'required',
            'status' => 'required'
        ];
    }

    public function messages(){
      return [
        'date.required' => 'Поле "Дата заезда" является обязательным для заполнения',
        'status.required' => 'Поле "Статус брони" является обязательным для заполнения'
      ];
    }
}
