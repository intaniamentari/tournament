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
                'name' => 'nullable|string',
                'email' => 'nullable|email',
                'phone' => 'nullable|string',
                'facebook' => 'nullable|url',
                'instagram' => 'nullable|url',
                'linkedin' => 'nullable|url',
            ];
        }

        if($this->section == 'carousel') {
            return [
                'title' => 'nullable|string',
                'text' => 'nullable|string',
            ];
        }

        if($this->section == 'about') {
            return [
                'sub_title' => 'nullable|string',
                'footer' => 'nullable|string',
                'title' => 'nullable|string',
                'text' => 'nullable|string',
            ];
        }

        if($this->section == 'fact'){
            // not have rules
            return [];
        }
    }
}
