<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopSoldRequest extends FormRequest
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
            'shop_name'=>'required|min:7',
            'total_cost'=>'required|numeric',
            'total_cost'=>'required|max:8',
            'checque_no'=>'required|numeric',
               'remarks'=>'required|string',

            remarks

        ];
    }
    public function messages()
    {
        return [
        'shop_name.required' =>'We need to know your name',];
    }
}
