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

    /**
     * Get all inspections.
     * 
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $inspections = $this->inspectionService->getAllInspections();

        return response()->json($inspections);
    }

    /**
     * Get a inspection by id.
     * 
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $inspection = $this->inspectionService->getInspectionById($id);

        return response()->json($inspection);
    }
}
