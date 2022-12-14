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
        $books = Book::all()->where('id', 2);
        $Booksid = $books[0]->id;
        $DatasOFBooks = array(
            'id' => $Booksid,
            'name' => 'olmadı',
            'title' => 'ssa',
            'price' => 255,
            'whenWritten' => '2012-11-07"'
        );


        $this->json('PUT', 'books/update/' . $books[0]->id, $DatasOFBooks)
            ->assertStatus(201)
            ->assertJson(["status" => 'success']);
    }
}

