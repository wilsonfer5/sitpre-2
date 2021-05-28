<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class studentCommentaryRequest extends FormRequest
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
        'profe'=>'required',
        'emailpro'=>'required',
        'mate'=>'required',
        'item'=>'required',
        'nota'=>'required',
        'username'=>'required',
        'usermail'=>'required',
        'userurl'=>'required',
        'coment'=>'required'
        ];
    }
}