<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id'=>'required',
            'fabric_year'=>'required',
            'circulation_year'=>['required'],
            'tech_visit_expire'=>['required'],
            'gris_card'=>['required'],
            'assurance_card'=>['required'],
            'tech_visit'=>['required'],
            'is_validated'=>['required'],
        ];
    }
}
