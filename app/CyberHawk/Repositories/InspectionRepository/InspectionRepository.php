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
        return $this->inspectionModel->get();
    }
}
