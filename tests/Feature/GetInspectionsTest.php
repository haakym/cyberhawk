<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Inspection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetInspectionsTest extends TestCase
{
    /**
     * Get all inspections.
     *
     * @return void
     */
    public function testGetAllInspections(): void
    {
        $inspections = Inspection::factory()->count(3)->create();

        $response = $this->get('/api/inspections');

        $response->assertStatus(200);
        
        $inspections->each(function ($item, $key) use ($response) {
            $response->assertJson([
                'id' => $item->id,
                'date_time' => $item->date_time,
                'turbine_id' => $item->turbine_id,
                'pilot_id' => $item->pilot_id,
            ]);
        });
    }
}
