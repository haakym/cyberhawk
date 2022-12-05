<?php

namespace App\CyberHawk\ValueObjects\Enums;

enum TurbineComponentGrade: int
{
    use GetValuesTrait;
    
    case PERFECT = 1;
    case GOOD = 2;
    case AVERAGE = 3;
    case BAD = 4;
    case BROKEN = 5;
}
