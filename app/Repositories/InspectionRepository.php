<?php

namespace App\Repositories;

use App\Models\Inspection;

class InspectionRepository
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
