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
