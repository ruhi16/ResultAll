<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidation extends FormRequest
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
             'name'  => 'required',
             'email' => 'required',
             'password'      => 'required',
             'confpassword'  => 'required',
         ];
     }
 
     public function messages()
     {
         return [
             'name.required'  => 'Required, H N DAS',
             'email.required' => 'Required, H N DAS',
             'password.required'      => 'required, H N DAS',
             'confpassword.required'  => 'required, H N DAS',  
         ];
     }
}
