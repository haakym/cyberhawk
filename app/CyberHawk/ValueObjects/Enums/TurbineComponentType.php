<?php

namespace App\CyberHawk\ValueObjects\Enums;

enum TurbineComponentType: string
{
    use GetValuesTrait;
    
    case BLADE = 'blade';
    case ROTOR = 'rotor';
    case HUB = 'hub';
    case GENERATOR = 'generator';
}
