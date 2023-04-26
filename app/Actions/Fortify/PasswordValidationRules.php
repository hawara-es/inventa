<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Config;
use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
        $rules = ['required', 'string', new Password];

        if (Config::get('fortify.use_password_confirmation')) {
            $rules[] = ['confirmed'];
        }

        return $rules;
    }
}
