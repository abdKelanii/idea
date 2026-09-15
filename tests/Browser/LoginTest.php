<?php

declare(strict_types=1);
use App\Models\User;

it('should login the user ', function () {
    $user = User::factory()->create([
        'password' => 'password'
    ]);

visit('/login')
        ->type('email', $user->email)
        ->type('password', 'password')
        ->click('button[type="submit"]')
        ->assertPathIs('/');

        $this->assertAuthenticated();

});



it('should logout  the user ', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    visit('/')
        ->click('Logout');
        $this->assertGuest();
});
