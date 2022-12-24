<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_check_if_role_seeds_work()
    {
        $rolesCount = Role::all()->count();

        $this->assertEquals(0, $rolesCount);
    }

    public function test_check_if_roles_exists()
    {
        $this->artisan('db:seed --class=RolesSeeder');
        $rolesCount = Role::all()->count();

        $this->assertNotEquals(0, $rolesCount);
    }


    public function test_check_if_no_permission_without_seeds()
    {
        $permissionsCount = Permission::all()->count();

        $this->assertEquals(0, $permissionsCount);
    }

    public function test_check_if_permissions_exists()
    {
        $this->artisan('db:seed --class=PermissionTableSeeder');
        $permissionsCount = Permission::all()->count();

        $this->assertNotEquals(0, $permissionsCount);
    }
}
