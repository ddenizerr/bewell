<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // public form
    }

    public function rules(): array
    {
        return [
            'first_name'          => ['required', 'string', 'max:255'],
            'last_name'           => ['required', 'string', 'max:255'],
            'email'               => ['required', 'email', 'max:255', 'unique:registrations,email'],
            'phone'               => ['nullable', 'string', 'max:255'],
            'date_of_birth'       => ['nullable', 'date'],
            'gender'              => ['nullable', 'in:male,female,other'],
            'height'              => ['nullable', 'numeric', 'between:50,250'],
            'goal'                => ['nullable', 'string', 'max:255'],
            'medical_conditions'  => ['nullable', 'string'],
            'allergies'           => ['nullable', 'string'],
            'dietary_preferences' => ['nullable', 'string', 'max:255'],
            'activity_level'      => ['nullable', 'in:low,medium,high'],
            'notes'               => ['nullable', 'string'],
            // status will default to 'pending'
        ];
    }
}
