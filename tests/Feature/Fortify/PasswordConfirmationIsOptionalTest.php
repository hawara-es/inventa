<?php

use App\Models\User;
use Illuminate\Support\Facades\Config;
use function Pest\Laravel\{postJson};
use Symfony\Component\HttpFoundation\Response;

it('can be used with password confirmation', function () {
    Config::set('fortify.use_password_confirmation', true);
    $this->refreshApplication();

    $user = User::factory()->raw();

    postJson('/register', [
        'username' => $user['username'],
        'email' => $user['email'],
        'password' => $user['password'],
        'password_confirmation' => $user['password'],
    ])->assertStatus(Response::HTTP_CREATED);
});

it('can be used without password confirmation', function () {
    Config::set('fortify.use_password_confirmation', false);
    $this->refreshApplication();

    $user = User::factory()->raw();

    postJson('/register', [
        'username' => $user['username'],
        'email' => $user['email'],
        'password' => $user['password'],
    ])->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
});
