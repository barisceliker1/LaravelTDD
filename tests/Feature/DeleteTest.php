<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\book;
use Tests\TestCase;

class DeleteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_book()
    {
        {

            $books = Book::all()->last();
            $this->json('DELETE', 'books/delete/'. $books->id)
                ->assertStatus(201)
                ->assertSuccessful()
                ->assertJson(["status" => 'success']);
        }
    }
}
