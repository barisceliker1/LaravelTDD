<?php

namespace Tests;

use App\Models\Book;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use WithoutMiddleware;
    public function createBook($args = [])
    {
        return Book::factory()->create($args);
    }

    public function createUser($args = []):User
    {
        return User::factory()->create($args);
    }
}
