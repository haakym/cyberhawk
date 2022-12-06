<?php

namespace App\CyberHawk\Repositories\InspectionRepository;

interface InspectionRepositoryInterface
{
    public function get();

    public function getById(int $id);
}
