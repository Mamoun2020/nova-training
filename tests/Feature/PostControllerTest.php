<?php

namespace Tests\Feature;

use Database\Factories\PostFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_all_posts()
    {
        PostFactory::new()->count(3)->create();
        $this->getJson('api/posts')
            ->assertSuccessful()
            ->assertJsonStructure(
                [
                    'data' => [
                        [
                            'id',
                            'title',
                            'body',
                        ]
                    ]
                ]
            );
    }
}
