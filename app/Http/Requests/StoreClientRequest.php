<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'title'=> 'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'province'=>'required',
            'email'=>'required|email',
            'mobile_number'=>'required',
            'client_type'=>'required',
            'agent_id'=>'required',
            'address_line_1'=>'required',
            'client_type'=>'required',
            'agent_id'=>'required',
            'city'=>'required',
            'zip_code'=>'required',
            // 'photograph' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ];
    }
}
