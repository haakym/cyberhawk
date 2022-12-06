<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Inspection;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetInspectionsTest extends TestCase
{
    use RefreshDatabase;

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
            $response->assertJsonFragment([
                'id' => $item->id,
                'date_time' => $item->date_time,
                'turbine_id' => $item->turbine_id,
                'pilot_id' => $item->pilot_id,
            ]);
        });
    }

    /**
     * Get an inspection.
     *
     * @return void
     */
    public function testGetInspection(): void
    {
        $inspections = Inspection::factory()->count(3)->create();

        $response = $this->get('/api/inspections/' . $inspections[0]->id);

        $response->assertStatus(200);
        
        $response->assertJsonFragment([
            'id' => $inspections[0]->id,
            'date_time' => $inspections[0]->date_time,
            'turbine_id' => $inspections[0]->turbine_id,
            'pilot_id' => $inspections[0]->pilot_id,
        ]);
    }
}
