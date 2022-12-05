<?php

namespace App\CyberHawk\ValueObjects\Enums;

trait GetValuesTrait
{
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
