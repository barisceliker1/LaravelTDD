<?php

namespace Tests\Feature;

use App\Models\Book;
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
        $rule = [
            'name' => 'geldi132253',
            'title' => 'ssa1',
            'price' => '255',
            'whenWritten' => '2012-11-07'
        ];

        $response=$this->postJson(route('books.store'), $rule);
        $this->withoutExceptionHandling();
        $response->assertStatus( 500 );

    }

}
