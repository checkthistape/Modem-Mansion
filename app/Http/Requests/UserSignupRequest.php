<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\IsUniqueUsername;

class UserSignupRequest extends FormRequest
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
            'username' => ['required', 'min:5', 'max:25', 'regex:/^[a-zA-Z0-9]*/i', new IsUniqueUsername],
            'pswd1' => ['required', 'min:8', 'max:40'],
            'pswd2' => ['required', 'min:8', 'max:40', 'same:pswd1']
        ];
    }
}
