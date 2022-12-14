<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\books;


class UpdateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $books = books::all()->where('id',2);
        $Booksid=$books[0]->id;
        $DatasOFBooks = array(
            'id'=>2,
            'name' => 'updateOldu',
            'title' =>'ssa',
            'price' =>  255,
            'whenWrited'=>'2012-11-07"'
        );



        $this->json('PUT', 'books/update/2', $DatasOFBooks)
            ->assertStatus(201);



}
}

