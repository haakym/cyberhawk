<?php

namespace App\CyberHawk\Services\InspectionService;

use App\CyberHawk\Repositories\InspectionRepository\InspectionRepositoryInterface;

class InspectionService implements InspectionServiceInterface
{
    public function __construct(
        private InspectionRepositoryInterface $inspectionRepository
    ) {
    }

    public function getAllInspections()
    {
        return $this->inspectionRepository->get();
    }

    public function getInspectionById(int $id)
    {
        return $this->inspectionRepository->getById($id);
    }
}
