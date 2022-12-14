<?php

namespace Tests\Feature;

use App\Models\book;
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
        $rules = array(
            'name' => 'geldi',
            'title' =>'ssa',
            'price' =>  255,
            'whenWritten'=>'2012-11-07"'
        );

        $this->json('POST', 'booksPost', $rules)
            ->assertStatus(201)
            ->assertSuccessful()
            ->assertJson(["status" => 'success']);
    }

}
