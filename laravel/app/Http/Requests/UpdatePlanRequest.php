<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'price' => ['required', 'numeric'],
            'discounted_price' => ['required', 'numeric'],
            'is_discounted' => ['nullable', 'accepted'],
            'discount_text_fa' => ['nullable', 'string'],
            'discount_text_en' => ['nullable', 'string'],
            'discount_text_de' => ['nullable', 'string'],
        ];
    }
}
