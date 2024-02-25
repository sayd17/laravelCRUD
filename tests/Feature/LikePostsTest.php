<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LikePostsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function a_post_can_be_liked(): void
    {
        $this->actingAs(factory(User::class)->create());
        $post = Post::factory()->create();
        $post->like();

        $this->assertDatabaseCount(1, $post->likes);
    }
}
