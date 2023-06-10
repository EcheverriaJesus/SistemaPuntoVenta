<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DebtStoreRequest extends FormRequest
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
            'customer_name' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:100'],
            'leave' => ['required', 'numeric'],
            'subtract' => ['required', 'numeric'],
            'total' => ['required', 'numeric'],
            'id_product' => ['required', 'string'],
        ];
    }
}
