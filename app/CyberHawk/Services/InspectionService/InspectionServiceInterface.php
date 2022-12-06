<?php

namespace App\CyberHawk\Services\InspectionService;

interface InspectionServiceInterface
{
    public function getAllInspections();

    public function getInspectionById(int $id);
}
