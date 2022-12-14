<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_new_book()
    {
        $rules = [
            'name' => 'geldi',
            'title' => 'ssa',
            'price' => 255,
            'whenWritten' => '2012-11-07'
        ];

        $this->postJson(route('books.store'), $rules)
            ->assertStatus(201)
            ->assertSuccessful()
            ->assertJson(["status" => 'success']);
    }

}
