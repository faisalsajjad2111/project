<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaintainChargesRequest extends FormRequest
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
            //
         'Shop_no'=>'required|numeric',
            'floor'=>'required|string',
                        'Setup'=>'required|string',
            'Bill_No'=>'required|numeric',


        ];
    }
}
