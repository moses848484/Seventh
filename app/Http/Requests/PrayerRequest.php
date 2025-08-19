<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrayerRequest extends FormRequest
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
            'name' => 'required|string|max:255|min:2',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20|regex:/^[\+]?[0-9\s\-\(\)]+$/',
            'request_type' => 'required|in:personal,family,health,financial,spiritual,other',
            'prayer_request' => 'required|string|min:10|max:5000',
            'is_private' => 'boolean',
            'is_urgent' => 'boolean',
        ];
    }

    /**
     * Get custom error messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your name.',
            'name.min' => 'Your name must be at least 2 characters.',
            'email.email' => 'Please enter a valid email address.',
            'phone.regex' => 'Please enter a valid phone number.',
            'request_type.required' => 'Please select a prayer category.',
            'request_type.in' => 'Please select a valid prayer category.',
            'prayer_request.required' => 'Please share your prayer request with us.',
            'prayer_request.min' => 'Please provide at least 10 characters for your prayer request.',
            'prayer_request.max' => 'Prayer request cannot exceed 5000 characters.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     */
    public function attributes(): array
    {
        return [
            'name' => 'name',
            'email' => 'email address',
            'phone' => 'phone number',
            'request_type' => 'prayer category',
            'prayer_request' => 'prayer request',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'is_private' => $this->boolean('is_private'),
            'is_urgent' => $this->boolean('is_urgent'),
        ]);
    }
}