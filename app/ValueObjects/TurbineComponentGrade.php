<?php

namespace App\ValueObjects;

enum TurbineComponentGrade: int
{
  case PERFECT = 1;
  case GOOD = 2;
  case AVERAGE = 3;
  case BAD = 4;
  case BROKEN = 5;

  public static function values(): array
  {
    return array_column(self::cases(), 'value');
  }
}
