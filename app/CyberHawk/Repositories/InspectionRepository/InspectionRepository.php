<?php

namespace App\CyberHawk\Repositories\InspectionRepository;

use App\Models\Inspection;

class InspectionRepository implements InspectionRepositoryInterface
{
    public function __construct(
        private Inspection $inspectionModel
    ) {
    }

    public function get()
    {
        return $this->inspectionModel
                ->withCount('componentGradings')
                ->with(['pilot', 'turbine.windfarm'])
                ->get();
    }

    public function getById(int $id)
    {
        return $this->inspectionModel
                ->with(['pilot', 'turbine.windfarm', 'componentGradings.turbineComponent'])
                ->findOrFail($id);
    }
}
