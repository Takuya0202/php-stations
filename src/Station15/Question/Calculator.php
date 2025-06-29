<?php

namespace Src\Station15\Question;

class Calculator
{
    public static function multiply(array $multiplieds, int $multiplier)
    {
        if (empty($multiplieds)) {
            return false;
        }
        $array = array_map(function ($value) use ($multiplier) {
            return $value * $multiplier;
        }, $multiplieds);

        return $array;
    }
}
