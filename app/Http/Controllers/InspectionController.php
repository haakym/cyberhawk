<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\CyberHawk\Services\InspectionService\InspectionService;

class InspectionController extends Controller
{
    public function __construct(
        private InspectionService $inspectionService
    ) {}

    public function index(): JsonResponse
    {
        $inspections = $this->inspectionService->getAllInspections();

        return response()->json($inspections);
    }
}
