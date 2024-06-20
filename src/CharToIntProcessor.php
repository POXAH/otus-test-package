<?php
declare(strict_types=1);

namespace Otus\HomeWork;

class CharToIntProcessor
{
    public function getNumberString( string $string): string
    {
        $intValue = '';
        for ($i = 0; $i < strlen($string); $i++) {
            $intValue .= mb_ord($string[$i], 'UTF-8');
        }
        return $intValue;
    }
}