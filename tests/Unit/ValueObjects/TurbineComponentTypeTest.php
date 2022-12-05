<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\CyberHawk\ValueObjects\Enums\TurbineComponentType;

class TurbineComponentTypeTest extends TestCase
{
    public function testValuesAreCorrect()
    {
        $values = TurbineComponentType::values();

        $this->assertEquals(
            ['blade', 'rotor', 'hub', 'generator'],
            $values
        );
    }
}
