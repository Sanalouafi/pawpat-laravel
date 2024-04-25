<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetStoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'rescued_date' => 'required|date',
            'breed' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female',
            'color' => 'required|string|max:255',
            'weight' => 'required|numeric|min:0',
            'size' => 'required|numeric|min:0',
            'vaccination_status' => 'required|boolean',
            'description' => 'nullable|string|max:255',
            'adoption_status' => 'required|boolean',
            'type_id' => 'required|exists:types,id',
        ];
    }
}
