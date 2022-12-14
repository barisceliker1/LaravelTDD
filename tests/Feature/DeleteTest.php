<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\books;
use Tests\TestCase;

class DeleteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        {
            $books = books::create([
                'name' => 'Good life of student',
                'title' => 'hard life of student.',
                'price' => 255,
                'whenWrited'=>'2012-11-07"'
            ]);
          echo "book name : ".$books->name. "created";

            $this->json('DELETE', 'books/delete/'. $books->id)
                ->assertStatus(201)
                ->assertSuccessful()
                ->assertJson(["status" => 'success']);




        }
    }
}
