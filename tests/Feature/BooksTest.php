<?php

namespace Tests\Feature;

use App\Models\books;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BooksTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        {
            $response = $this->get('books')
                ->assertStatus(200)
                ->assertJsonStructure(
                    [
                        [
                            "id",
                            "title",
                            "name",
                            "price",
                            "whenWrited",

                        ],
                    ],
                );
        }
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */


}
