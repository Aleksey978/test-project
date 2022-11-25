<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'massage' => ''
        ];
    }
//    public function messages()
//    {
//        return [
//            'name.required'=>'Поле имя является обязательным',
//            'company.required'=>'Поле Название компании является обязательным',
//            'email.required'=>'Поле Email является обязательным',
//            'email.email'=>'Неверный формат Email',
//
//        ];
//    }
}
