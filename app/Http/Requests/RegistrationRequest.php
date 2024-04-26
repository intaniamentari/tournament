<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if($request->isMethod('post')){
            return [
                'name' => 'required|string',
                'gender' => 'required|string',
                'address' => 'required|string',
                'username' => 'required|string',
                'password' => 'required|string',
                'phone' => 'required|string',
                'age' => 'required|numeric',
                'category' => 'required|string',
            ];
        }
    }
}
