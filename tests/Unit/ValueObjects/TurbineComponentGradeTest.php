<?php

namespace Tests\Unit;

use App\CyberHawk\ValueObjects\Enums\TurbineComponentGrade;
use PHPUnit\Framework\TestCase;

class TurbineComponentGradeTest extends TestCase
{
    public function testValuesAreCorrect()
    {
        $values = TurbineComponentGrade::values();

        $this->assertEquals(
            [1, 2, 3, 4, 5],
            $values
        );
    }
}
