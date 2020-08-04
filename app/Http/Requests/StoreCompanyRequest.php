<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'name'=> 'required',
            'address_line_1'=>'required',
            'city'=>'required',
            'zip'=>'required|string',
            'province'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'website'=>'required',
        ];
    }
}
