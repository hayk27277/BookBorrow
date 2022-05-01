<?php

namespace App\Enums;

enum GenreStyle: string
{
    case PRIMARY = 'primary';
    case SECONDARY = 'secondary';
    case SUCCESS = 'success';
    case DANGER = 'danger';
    case WARNING = 'warning';
    case INFO = 'info';
    case LIGHT = 'light';
    case DARK = 'dark';

    public static function toArray(): array
    {
        $allCases = self::cases();
        $allValues = [];

        foreach ($allCases as $case){
            $allValues[] =$case->value;
        }

        return $allValues;
    }
}
