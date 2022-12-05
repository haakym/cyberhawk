<?php

namespace Tests\Unit\Services;

use Illuminate\Support\Carbon;
use PHPUnit\Framework\TestCase;
use App\CyberHawk\Services\InspectionService\InspectionService;
use App\CyberHawk\Repositories\InspectionRepository\InspectionRepositoryInterface;

class InspectionServiceTest extends TestCase
{
    public function testInspectionServiceGetAllInspections()
    {
        $inspectionRepositoryMock = $this->getMockBuilder(InspectionRepositoryInterface::class)->getMock();
        $inspectionRepositoryMock->expects($this->once())
            ->method('get')
            ->willReturn([
                'date_time' => Carbon::now()->format('Y-m-d H:i:s'),
                'turbine_id' => 1,
                'pilot_id' => 2,
            ]);

        $inspectionService = new InspectionService($inspectionRepositoryMock);
        $inspectionService->getAllInspections();
    }
}
