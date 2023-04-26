<?php

use App\Models\User;
use Illuminate\Support\Str;
use function Pest\Laravel\{postJson};

it('respects incoming UUID for new users', function () {
    $user = User::factory()->raw();
    $uuid = (string) Str::uuid();

    postJson('/register', [
        'id' => $uuid,
        'username' => $user['username'],
        'email' => $user['email'],
        'password' => $user['password'],
        'password_confirmation' => $user['password'],
    ]);

    $stored = User::whereEmail($user['email'])->first();

    expect($stored->id)->toBe($uuid);
});
