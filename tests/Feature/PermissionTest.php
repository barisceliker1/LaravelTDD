<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PermissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_if_role_management_is_not_availabale_for_unauthorized_user()
    {
        $response = $this->get('/roles');
        $response->assertStatus(500);
    }

    public function test_if_role_management_is_not_availabale_for_authorized_simple_user()
    {
        $user = $this->createUser();
        $this->actingAs($user);
        $response = $this->get('/roles');
        $response->assertStatus(500);
    }
}
