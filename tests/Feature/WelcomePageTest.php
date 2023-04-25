<?php

use function Pest\Laravel\{get};

it('has a welcome page', function () {
    get('/')->assertStatus(200);
});
