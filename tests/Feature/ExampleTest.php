<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends TestCase
{
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
}
