<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetInspectionsTest extends TestCase
{
    /**
     * Get all inspections.
     *
     * @return void
     */
    public function testGetAllInspections(): void
    {
        $response = $this->get('/api/inspections');

        $response->assertStatus(200);
    }
}
