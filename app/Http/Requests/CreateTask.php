<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTask extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

     // ログインとか
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
        // []で囲むのは配列
        //  required は必須という意味
        return [
            // 対象の入力欄　=> 条件
            // numeric は数字だけという意味
            'tel' => ['required' , 'numeric'],
        ];
    }
}
