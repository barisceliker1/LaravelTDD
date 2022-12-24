<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Book;
use Tests\TestCase;

class DeleteTest extends TestCase
{

    public function test_delete_book()
    {
        $book = Book::count();

        if ($book>0){
            $findId=Book::all()->last()->id;
            $response =$this->deleteJson(route('books.destroy',$findId));
            $this->withoutExceptionHandling();
            $response->assertStatus( 201 );
        }elseif($book==0){
            $findId=Book::all()->last()->id;
            $response =$this->deleteJson(route('books/delete/'.$findId));
            $this->withoutExceptionHandling();
            $response->assertStatus( 201 );
        }



    }
}
