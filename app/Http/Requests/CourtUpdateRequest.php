<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourtUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255', 'string'],
            'city' => ['required', 'max:255', 'string'],
            'state' => ['required', 'max:255', 'string'],
            'zipcode' => ['required', 'numeric'],
            'case1_id' => ['required', 'exists:case1s,id'],
        ];
    }
}
