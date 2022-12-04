<?php

namespace App\ValueObjects;

enum TurbineComponentType: string
{
  case BLADE = 'blade';
  case ROTOR = 'rotor';
  case HUB = 'hub';
  case GENERATOR = 'generator';

  public static function values(): array
  {
    return array_column(self::cases(), 'value');
  }
}
