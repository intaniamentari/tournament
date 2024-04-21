<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComponentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * true : user can validation without auth() before
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
        if($this->section == 'navbar') {
            return [
                'name' => 'required|string',
                'email' => 'nullable|email',
                'phone' => 'nullable|string',
                'facebook' => 'nullable|url',
                'instagram' => 'nullable|url',
                'linkedin' => 'nullable|url',
            ];
        }
    }
}
