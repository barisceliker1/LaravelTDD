<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Book;
use Tests\TestCase;

class DeleteTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_book()
    {
        $book = $this->createBook();
        $this->deleteJson(route('books.destroy', $book->id))->assertSuccessful();

        $this->assertDatabaseMissing('books', ['name' => $book->name]);
    }
}
