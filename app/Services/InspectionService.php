<?php

namespace App\Services;

use App\Repositories\InspectionRepository;

class InspectionService
{
    public function __construct(
        private InspectionRepository $inspectionRepository
    ) {
    }

    public function getAllInspections()
    {
        return $this->inspectionRepository->get();
    }
}
