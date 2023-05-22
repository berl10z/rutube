<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['string','max:255','required'],
            'email' => ['email','max:255','required', 'unique:users'],
            'password' => ['string','required','max:255','confirmed'],
            'rules' => ['accepted']
        ];
    }
}
