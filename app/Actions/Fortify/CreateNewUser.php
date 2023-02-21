<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'firstname' => ['required', 'string', 'max:255'],
            'firstname_ar' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'lastname_ar' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'firstname' => $input['firstname'],
            'firstname_ar' => $input['firstname_ar'],
            'lastname' => $input['lastname'],
            'lastname_ar' => $input['lastname_ar'],
            'username' => $input['username'],
            'password' => Hash::make($input['password']),
            'login_type' => "Admin"
        ]);
    }
}
