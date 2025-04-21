<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class YoutubeVideoTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_list(): void
    {
        $response = $this->get('/api/videos');

        $response->assertStatus(200);
    }

    public function test_search(): void
    {
        $response = $this->get('/api/videos/search?q=Big');

        $response->assertStatus(200);
    }
}
