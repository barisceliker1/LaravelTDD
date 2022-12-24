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
        $books = Book::all()->where('id', 4);
        $DatasOFBooks = array(
            'id' => $books,
            'name' => 'updatedName2',
            'title' => 'updatedTitl2e2',
            'price' => 255,
            'whenWritten' => '2012-11-07"'
        );


        $response=$this->json('PUT', 'books/update/' . $books[0]->id, $DatasOFBooks);
        $this->withoutExceptionHandling();
        $response->assertStatus( 201 );
    }
}

