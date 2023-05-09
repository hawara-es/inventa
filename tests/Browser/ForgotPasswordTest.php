<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ForgotPasswordTest extends DuskTestCase
{
    public function testThereIsAForgotPasswordPage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/forgot-password')
                    ->assertSee(__('forgot-password.title'))
                    ->screenshot('forgot-password');
        });
    }
}
