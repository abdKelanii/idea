<?php

declare(strict_types=1);

it('should register a user ', function () {
    visit('/register')
        ->type('name', 'John Doe')
        ->type('email', 'email@example.com')
        ->type('password', 'password')
        ->click('button[type="submit"]')
        ->assertPathIs('/');

        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'email@example.com'
        ]);
});


it("should require a valid email address", function () {
    visit('/register')
        ->type('name', 'John Doe')
        ->type('email', 'invalid-email')
        ->type('password', 'password')
        ->click('button[type="submit"]')
        ->assertPathIs('/register');

        $this->assertGuest();
        $this->assertDatabaseMissing('users', [
            'name' => 'John Doe',
            'email' => 'invalid-email'
        ]);
});
