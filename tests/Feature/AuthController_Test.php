<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthController_Test extends TestCase
{
    public function test_registerFailedFailedIsEmpty()
    {
        $response = $this->post('/Auth/register');

        $response->assertInvalid(['username']);
        $response->assertInvalid(['email']);
        $response->assertInvalid(['password']);
        $response->assertInvalid(['password_confirmation']);
    }


    public function test_registerSuccess()
    {
        $data = [
            'username' => 'damayanti',
            'email' => 'damayanti11@gmail.com',
            'password' => 'damayanti',
            'password_confirmation' => 'damayanti'
        ];

        $response = $this->post('/Auth/register', $data);

        $response->assertRedirect('/Auth/register');
    }
}
