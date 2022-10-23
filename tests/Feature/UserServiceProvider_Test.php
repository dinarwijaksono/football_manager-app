<?php

namespace Tests\Feature;

use App\Services\User_service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceProvider_Test extends TestCase
{
    public $user_serviceProvider;

    public function setUp(): void
    {
        parent::setUp();

        $this->user_serviceProvider = $this->app->make(User_service::class);
    }

    public function test_addUser()
    {
        $this->user_serviceProvider->addUser('coba', 'coba@gmail.com', 'rahasia');

        $this->assertDatabaseHas('users', ['username' => 'coba']);
    }
}
