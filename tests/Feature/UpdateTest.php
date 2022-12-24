<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Book;


class UpdateTest extends TestCase
{
    public function test_update_book_data()
    {
        $book = $this->createBook();
        $DatasOFBooks = array(
            'id' => $book->id,
            'name' => 'updatedName2',
            'title' => 'updatedTitl2e2',
            'price' => 255,
            'whenWritten' => '2012-11-07"'
        );


        $response = $this->json('PUT', 'books/update/' . $book->id, $DatasOFBooks);
        $this->withoutExceptionHandling();
        $response->assertStatus(201);
    }
}

