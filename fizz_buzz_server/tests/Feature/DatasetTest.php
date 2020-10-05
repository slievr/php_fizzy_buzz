<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatasetTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDatasetReturnsData()
    {
        $size = 100;

        $response = $this->get('/api/dataset?size={$size}');

        $response->assertStatus(200);
        $response->assertJsonCount($size, "");
    }

    public function testProcessedDatasetReturnsData()
    {
        $size = 100;

        $response = $this->get('/api/dataset/processed?size={$size}');

        $response->assertStatus(200);
        $response->assertJsonCount($size, "");
    }
}
