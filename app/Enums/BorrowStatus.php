<?php

namespace App\Enums;

enum BorrowStatus: string
{
    case PENDING = 'PENDING';
    case ACCEPTED = 'ACCEPTED';
    case REJECTED = 'REJECTED';
    case RETURNED = 'RETURNED';

    public static function toArray(): array
    {
        $allCases = self::cases();
        $allValues = [];

        foreach ($allCases as $case) {
            $allValues[] = $case->value;
        }

        return $allValues;
    }
}
