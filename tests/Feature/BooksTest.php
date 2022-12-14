<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BooksTest extends TestCase
{
    public function test_books_index()
    {
        $this->createBook();
        $response = $this->get('books')
            ->assertStatus(200)
            ->assertJsonStructure(
                [
                    [
                        "id",
                        "title",
                        "name",
                        "price",
                        "whenWritten",
                    ],
                ],
            );
    }
}
